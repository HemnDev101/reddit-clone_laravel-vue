<script setup>
import {Link } from  '@inertiajs/vue3' ;

defineProps({
    links : Array
})
</script>

<template>
<div class="flex" >
    <template v-for="(link , key) in links" :key="key">

        <div v-if="link.url === null" v-html="link.label"  class="flex items-center justify-center px-3 h-8 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-500 mr-auto dark:hover:bg-gray-700 dark:hover:text-white"  >
        </div>
        <Link v-else :href="link.url" v-html="link.label" :class="{'bg-indigo-100' : link.active}"   class="focus:text-indigo-500 focus:border-indigo-5 00 flex items-center justify-center px-3 h-8 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-300 mr-auto dark:hover:bg-gray-700 dark:hover:text-white">

        </Link>


<!--        <div class="flex">-->
<!--            &lt;!&ndash; Previous Button &ndash;&gt;-->
<!--            <a href="#" class="flex items-center justify-center px-3 h-8 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">-->
<!--                {{ Data }}-->
<!--            </a>-->

<!--        </div>-->



    </template>
</div>
</template>

<style scoped>

</style>
