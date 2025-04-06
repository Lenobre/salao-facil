@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
    <x-broadcrumb />

    <div class="flex items-center mt-4">
        <h1 class="text-xl text-black dark:text-white font-semibold mr-4">Indicadores geraisss</h1>

        <select name="period"
            class="appearance-none outline-none text-xs bg-white text-black dark:text-white dark:bg-zinc-900 px-3 py-1 rounded-md border border-gray-300 dark:border-zinc-700 hover:border-rose-500">
            <option value="today">Hoje</option>
            <option value="week">Semana atual</option>
            <option value="month">Mês atual</option>
            <option value="year">Ano atual</option>
            <option value="all">Todo o período</option>
        </select>
    </div>

    <div class="grid grid-cols-12 gap-4 mt-3">
        <x-dashboard.card title="Ocupação do estoque" class="col-span-4 animate-fade-down" icon="hotel-fill"
            legend="Ocupação" value="80%" porcent="80" />
    </div>

    <div class="flex">
        <h2 class="text-xl font-semibold mt-4">Gráficos gerais</h2>
    </div>
@endsection
