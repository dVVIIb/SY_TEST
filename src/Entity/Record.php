<?php // src/Entity/Record.php
declare(strict_types = 1);
namespace App\Entity;

use App\Repository\RecordRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RecordRepository::class)
 * @ORM\Table(name="Records")
 */
class Record {
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue
	 * @ORM\Column(type="integer")
	 */
	protected $id;

	public function getId(): ?int {
		return $this->id;
	}

	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\RecordStatus", mappedBy="record", cascade={"persist"})
	 * @ORM\JoinColumn(name="Id")
	 */
	private ?RecordStatus $recordStatus = NULL;

	public function getRecordStatus(): ?RecordStatus {
		return $this->recordStatus;
	}

	public function setRecordStatus(RecordStatus $value): void {
		$value->setRecord($this);
		$this->recordStatus = $value;
	}
}