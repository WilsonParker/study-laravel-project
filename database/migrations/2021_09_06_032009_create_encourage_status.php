<?php

use Illuminate\Database\Schema\Blueprint;

class CreateEncourageStatus extends \LaravelSupports\Libraries\Supports\Databases\Migrations\CreateMigration
{
    protected string $table = 'encourage_status';

    protected function defaultUpTemplate(Blueprint $table)
    {
        $table->string('code', 32)->primary()->comment('고유키');
        $table->string('name', 64)->nullable(false)->comment('이름');
        $table->string('description', 128)->nullable(true)->comment('설명');
    }
}
