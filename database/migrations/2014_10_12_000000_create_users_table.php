<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('sponsor');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            // $table->string('image')->nullable();
            $table->string('profile_photo_path')->nullable();
            $table->tinyInteger('role_id')->default(0)->comment('0=user, 1=mentor, 9=admin');
            $table->tinyInteger('status')->default('1')->comment('1=active,0=Inactive');
            $table->tinyInteger('is_online')->default('0');
            $table->dateTime('last_login')->nullable();
            $table->string('login_ip')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        DB::table('users')->insert([
            'name' => 'efgsteps',
            'role_id' => 9,
            'sponsor' => 'efgsteps',
            'email' => 'asbeez@efgsteps.com',
            'password' => \Hash::make('secret'),
            'email_verified_at' => now(),
            'created_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'jlustre',
            'role_id' => 9,
            'sponsor' => 'efgsteps',
            'email' => 'admin@efgsteps.com',
            'password' => \Hash::make('secret'),
            'email_verified_at' => now(),
            'created_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'jblustre',
            'role_id' => 1,
            'sponsor' => 'jlustre',
            'email' => 'mentor@efgsteps.com',
            'password' => \Hash::make('secret'),
            'email_verified_at' => now(),
            'created_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'jerrel',
            'role_id' => 1,
            'sponsor' => 'jblustre',
            'email' => 'jerrel@efgsteps.com',
            'password' => \Hash::make('secret'),
            'email_verified_at' => now(),
            'created_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'jenessy',
            'role_id' => 0,
            'sponsor' => 'jlustre',
            'email' => 'jenessy@efgsteps.com',
            'password' => \Hash::make('secret'),
            'email_verified_at' => now(),
            'created_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'jerrick',
            'role_id' => 1,
            'sponsor' => 'jblustre',
            'email' => 'jerrick@asbeez.com',
            'password' => \Hash::make('secret'),
            'email_verified_at' => now(),
            'created_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
