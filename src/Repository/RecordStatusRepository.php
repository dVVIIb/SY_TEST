<?php // src/Repository/RecordStatusRepository.php
declare(strict_types = 1);
namespace App\Repository;

use App\Entity\RecordStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class RecordStatusRepository extends ServiceEntityRepository {
	public function __construct(ManagerRegistry $registry) {
		parent::__construct($registry, RecordStatus::class);
	}
}