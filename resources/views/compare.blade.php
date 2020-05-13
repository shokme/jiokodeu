@extends('layouts.base')

@section('content')
  @include('layouts.navbar')
  <div class="mx-auto px-4 sm:px-6 md:px-8">
    <div class="bg-white overflow-y-auto shadow rounded-lg">
      <h1 class="px-2 py-2 font-semibold text-4xl text-gray-900">Compare geocoding providers</h1>
      <table class="min-w-full">
        <thead>
        <tr>
          <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
          </th>
          <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
            Jiokodeu
          </th>
          <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
            SmartyStreets
          </th>
          <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
            Google
          </th>
          <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
            Bing
          </th>
          <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
            Here
          </th>
          <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
            Mapbox
          </th>
        </tr>
        </thead>
        <tbody>
        <tr id="FreeLookups" class="bg-white">
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
            Free lookups
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            2 500/day
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            250/month
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            avg. 1 333/day
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            10 000/month
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            avg. 1 111/day
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            100 000/month
          </td>
        </tr>
        <tr id="PayAsYouGo" class="bg-gray-100">
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
            Pay as you go
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            $0.5 per 1 000
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            $4-5 per 1 000
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            n/a
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            n/a
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            Free-$5 per 1 000
          </td>
        </tr>
        <tr class="bg-white">
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
            Unlimited subscription
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
            $1000/month
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
            $1000/month
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
        </tr>
        <tr class="bg-gray-100">
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
            No subscription required
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
        </tr>
        <tr class="bg-white">
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
            No attribution requirements or usage restrictions
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
        </tr>
        <tr class="bg-gray-100">
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
            CSV file upload
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
        </tr>
        <tr class="bg-white">
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
            API
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
        </tr>
        <tr class="bg-gray-100">
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
            Bulk Geocoding
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
        </tr>
        <tr class="bg-white">
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
            Reverse Geocoding
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
        </tr>
        <tr class="bg-gray-100">
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
            Data appends
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <ul>
              <li>Congressional districts</li>
              <li>State legislative districts</li>
              <li>Timezones</li>
              <li>School districts</li>
              <li>FIPS Codes</li>
              <li>Census Tract/Block</li>
              <li>Census CSA/MSA</li>
            </ul>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <ul>
              <li>Congressional districts</li>
              <li>Timezones</li>
              <li>Vacancy Status</li>
              <li>Residential/Commercial</li>
              <li>Status</li>
              <li>FIPS Codes</li>
              <li>ZIP+4</li>
            </ul>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
    <p class="mt-2 text-base text-gray-900">The information in this table is based on publicly-available information on other providers' websites. We do our best to keep it updated, but if you find
      any errors, please <a class="text-indigo-700" href="mailto:**company**">let us know</a>. Read the other providers' full Terms:
      <a class="text-indigo-700" href="https://smartystreets.com/legal/terms-of-service">SmartyStreets</a>, <a class="text-indigo-700" href="https://developers.google.com/maps/terms">Google</a>,
      <a class="text-indigo-700" href="https://www.microsoft.com/maps/product/terms.html">Bing</a>, <a class="text-indigo-700" href="https://developer.here.com/terms-and-conditions">HERE</a> and
      <a class="text-indigo-700" href="https://www.mapbox.com/legal/tos/">MapBox</a>.</p>
  </div>
@endsection

