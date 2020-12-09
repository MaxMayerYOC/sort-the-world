<?php


namespace App\Controller;

use App\DataHandling\DataProcessor;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SortController extends AbstractController
{
    /**
    * @param DataProcessor $data
    */
    private $dataprocessor;
    private $projectDir;
    public function __construct(
        DataProcessor $data,
        string $projectDir
    )
    {
        $this->dataprocessor=$data;
        $this->projectDir = $projectDir;
    }

    /**
     * @Route ("/", name="app_homepage")
     * @return Response
     */

    public function homepage()
    {
        $sortalgorithm='';
        $data=' no file uploaded';
        if (!empty($_REQUEST["sort"])) {
            $sortalgorithm = $_REQUEST["sort"];

            if (!empty($_FILES["fileToUpload"]["tmp_name"])) {
                $data = file_get_contents($_FILES["fileToUpload"]["tmp_name"]);

                //Split the file into an array
                $data=preg_split("/[\s,]+/",$data);

                //Clean up the array
                foreach ($data as &$value) {
                    $value = (filter_var($value, FILTER_SANITIZE_NUMBER_FLOAT));
                }

                //Process the data
                $data= $this->dataprocessor->processing ($sortalgorithm, $data);

                //Output the data
                $data='here is your sorted data: '.$data;
            }
        }
        return $this->render('sorter/homepage.twig', ['data'=>$data,'sort'=>$sortalgorithm]);
    }
}