<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {   /**
            * Create the event to delete obsolete records from the table 'messages' every 30 days starting from the current date.
         */
        DB::unprepared('CREATE EVENT delete_obsolete_records
        ON SCHEDULE
        EVERY 30 DAY
        STARTS CURRENT_TIMESTAMP
        ON COMPLETION PRESERVE
        DO
            DELETE FROM messages
            WHERE created_at < DATE_SUB(NOW(), INTERVAL 30 DAY)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {   // Delete the event to delete obsolete records from the table 'messages'.
        DB::unprepared('DROP EVENT IF EXISTS delete_obsolete_records');
    }
};
