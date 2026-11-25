
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();

            $table->string('slug')->unique();
            $table->string('numero', 10)->nullable();

            $table->string('nombre');
            $table->string('ubicacion')->nullable();
            $table->string('periodo', 50)->nullable();

            $table->string('especialidad')->nullable();
            $table->string('tipo')->nullable();
            $table->string('categoria')->nullable();

            $table->text('descripcion')->nullable();
            $table->text('alcance')->nullable();

            $table->string('imagen_principal')->nullable();

            $table->json('galeria')->nullable();

            $table->boolean('publicado')->default(true);
            $table->unsignedInteger('orden')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
