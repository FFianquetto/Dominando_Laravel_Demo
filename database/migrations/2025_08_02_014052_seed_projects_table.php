<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('projects')->insert([
            [
                'title' => 'Proyecto Web E-commerce',
                'description' => 'Desarrollo de una plataforma de comercio electrónico completa con sistema de pagos, gestión de inventario y panel de administración.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Aplicación Móvil de Fitness',
                'description' => 'App móvil para seguimiento de rutinas de ejercicio, nutrición y progreso personal con integración de wearables.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sistema de Gestión Empresarial',
                'description' => 'Software integral para la gestión de recursos humanos, finanzas y operaciones de pequeñas y medianas empresas.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('projects')->whereIn('title', [
            'Proyecto Web E-commerce',
            'Aplicación Móvil de Fitness',
            'Sistema de Gestión Empresarial'
        ])->delete();
    }
};
