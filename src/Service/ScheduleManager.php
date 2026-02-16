<?php

namespace Drupal\program_scheduling\Service;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Messenger\MessengerInterface;
use Drupal\Core\Logger\LoggerChannelInterface;

class ScheduleManager {

  protected MessengerInterface $messenger;
  protected LoggerChannelInterface $logger;

  public function __construct(MessengerInterface $messenger, LoggerChannelInterface $logger) {
    $this->messenger = $messenger;
    $this->logger = $logger;
  }

  public function checkConflicts(EntityInterface $schedule): bool {
    // Logic to check for conflicts in the given schedule.
    // Return true if conflicts are found, false otherwise.
    return false;
  }

  public function sendNotification(string $message): void {
    $this->messenger->addMessage($message);
  }

  public function logMessage(string $message): void {
    $this->logger->notice($message);
  }
}