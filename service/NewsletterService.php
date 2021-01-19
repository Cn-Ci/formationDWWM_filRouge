<?php 
include_once('../dao/InscriptionNewsletterMysqliDAO.php');
include_once("../Exception/UserException.php");
include_once('../service/ServiceException.php');


ini_set('display_errors',1); 
error_reporting(E_ALL);

Class NewsletterService {

    static function addEmailNewsletter(Newsletter $newsletter) 
    {
        try { 
            $emailNewsletter = new InscriptionNewsletterMysqliDAO;
            $rs = $emailNewsletter->addEmailNewsletter($newsletter);
            return $rs;
        } 
        catch (NewsletterException $de) {
            throw new ServiceException($de->getMessage(), $de->getCode());
        }  
    } 

}