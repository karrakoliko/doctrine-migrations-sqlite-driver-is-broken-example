<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230725131615 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'rename table';
    }

    public function up(Schema $schema): void
    {
        $schema->renameTable('example','example_renamed');

    }

    public function down(Schema $schema): void
    {
        $schema->renameTable('example_renamed','example');
    }
}
