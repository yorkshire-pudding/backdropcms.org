<?php
/*
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC. All rights reserved.                        |
 |                                                                    |
 | This work is published under the GNU AGPLv3 license with some      |
 | permitted exceptions and without any warranty. For full license    |
 | and copyright information, see https://civicrm.org/licensing       |
 +--------------------------------------------------------------------+
 */
namespace Civi\Api4;

use Civi\Api4\Generic\Traits\ReadOnlyEntity;

/**
 * Mailing job.
 *
 * Mailing job tracks the batching of CiviMails.
 *
 * @searchable none
 *
 * @see https://docs.civicrm.org/user/en/latest/email/what-is-civimail/
 * @since 5.48
 * @package Civi\Api4
 */
class MailingJob extends Generic\DAOEntity {
  use ReadOnlyEntity;

}