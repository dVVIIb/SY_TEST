<?php // src/Controller/DefaultController.php
declare(strict_types = 1);
namespace App\Controller;

use App\Entity\Record;
use App\Entity\RecordStatus;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController {
	/**
	 * @Route("/")
	 */
	public function home(): Response {
		$doctrine = $this->getDoctrine();
		$entityManager = $doctrine->getManager();
		$recordRepository = $doctrine->getRepository(Record::class);
		$recordStatus = new RecordStatus;
		$item = $recordRepository->find(9);
		$item->setRecordStatus($recordStatus);
		$entityManager->flush();
		return new JsonResponse(['id' => $item->getId()]);
	}
}