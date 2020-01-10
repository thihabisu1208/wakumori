

<template>
            <ul class="itemMenu">

                    <li class="item" v-for="usagi in usagis" :key="usagi.id">
                        <img class="itemImg" v-bind:src="'/img/'+ usagi.path +'.png'" alt="usagi.alt">
                    </li>

            </ul>

</template>

<script>
export default {
  props: {
    usagis:{
      type: Array
    }

  }
}
</script>
