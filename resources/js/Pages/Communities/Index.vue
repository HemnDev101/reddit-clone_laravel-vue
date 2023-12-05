

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
 import { Head,  Link } from '@inertiajs/vue3';

defineProps({
    community:Object
}) ;




</script>

<template>


  <Head title="Create Community" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">All Community</h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

          <div class="flex justify-between">
<div></div>
              <Link type="button" :href="route('communities.create')"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create Community</Link>

          </div>



          <div class="max-w-md mx-auto bg-white m-2 p-6 rounded-b-2xl">



     <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->

     <div class="flex flex-col">

         <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">

             <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">

                 <div class="overflow-hidden">

                     <table class="min-w-full text-center text-sm font-light">
                         <thead
                             class="border-b bg-neutral-50 font-medium dark:border-neutral-500 dark:text-neutral-800">
                         <tr>
                             <th scope="col" class=" px-6 py-4">#</th>
                             <th scope="col" class=" px-6 py-4">Name</th>
                             <th scope="col" class=" px-6 py-4">Slug</th>

                         </tr>
                         </thead>
                         <tbody>
                         <tr class="border-b dark:border-neutral-500" v-for="val in community" :key="val.id">
                             <td class="whitespace-nowrap  px-6 py-4 font-medium">{{ val.id }}</td>
                             <td class="whitespace-nowrap  px-6 py-4">{{ val.name }}</td>
                             <td class="whitespace-nowrap  px-6 py-4">{{ val.slug }}</td>
<!--                            <Link class="whitespace-nowrap  px-6 py-4" :href="route(community.index)">Edit</Link>-->

                         </tr>

                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>


 </div>
       </div>
    </div>



  </AuthenticatedLayout>

</template>


