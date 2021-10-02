<?php // src/Entity/RecordStatus.php
declare(strict_types = 1);
namespace App\Entity;

use App\Repository\RecordStatusRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RecordStatusRepository::class)
 * @ORM\Table(name="Record_Statuses")
 */
class RecordStatus {
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
	 * @ORM\Column(type="integer", name="createdBy")
	 */
	protected $createdBy = 0;

	/**
	 * @ORM\Column(type="integer", name="updatedBy")
	 */
	protected $updatedBy = 0;

	/**
	 * @ORM\Column(type="integer", name="recordStateId")
	 */
	protected $recordStateId = 0;

	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\Record", inversedBy="record")
	 * @ORM\JoinColumn(name="RecordId")
	 */
	private Record $record;

	public function getRecord(): Record {
		return $this->record;
	}

	public function setRecord(Record $value): void {
		$this->record = $value;
	}
}