<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230725131319 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'create table';
    }

    public function up(Schema $schema): void
    {
        $table = $schema->createTable('example');

        $table->addColumn('uuid','string');
        $table->addUniqueIndex(['uuid'],'uuid_index');
    }

    public function down(Schema $schema): void
    {
        $schema->dropTable('example');


    }
}
