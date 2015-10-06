<?php

namespace Acme\PasswordCheckerBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Parser;

/**
 * Password controller.
 */
class PasswordController extends Controller
{

    private $notification;

    private $pattern;

    private $patternPath = '/../Resources/data/password_patterns.yml';

    /**
     * Finds and displays an information whether password passed
     * the check or not during runtime.
     *
     * @Route("/password-checker")
     */
    public function processingAction()
    {
        $em = $this->getDoctrine()->getManager();
        $passwords = $em->getRepository('AcmePasswordCheckerBundle:PasswordChecker')->findAll();

        foreach ($passwords as $entity) {
            $password = $entity->getPassword();
            if (!$password) {
                continue;
            }
            if ($this->passwordValidator($password)) {
                $entity->setvalid(1);
            }
            echo "<b>{$password}:</b> {$this->notification}<br><hr>";
        }

        $em->flush();

        return new Response("=================finish!======================");

    }

    private function passwordValidator($password)
    {
        $this->yamlParser();
        $pattern = $this->pattern['pattern'];
        preg_match($pattern, $password, $message);

        if (isset($message[0]) && !empty($message[0])) {
            $this->notification = $this->pattern['success_message'];
            return true;
        } else {
            $this->notification = $this->pattern['error_message'];
            return false;
        }

    }

    private function yamlParser()
    {
        $yaml = new Parser();
        try {
            $value = $yaml->parse(file_get_contents(__DIR__ . $this->patternPath));
            $this->pattern = $value['password_patterns'][0];
        } catch (ParseException $e) {
            printf("Unable to parse the YAML string: %s", $e->getMessage());
        }

    }

}
