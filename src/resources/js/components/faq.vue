 

<template>
<div role="tablist list-group-item">
    <b-card style="background-color: #9e9e9e;" v-for="(queswer) in queswers" v-bind:key="queswer.id" no-body class="m-0">
      <b-card-header header-tag="header" style="border: none;" class="p-1" role="tab">
        <b-button block v-b-toggle="'accordion-' + queswer.id" variant="secondary" class="text-left pt-3"><h5>Q: {{ queswer.question }}</h5></b-button>
      </b-card-header>
      <b-collapse :id="'accordion-'+queswer.id" accordion="my-accordion" role="tabpanel">
        <b-card-body style="background-color: #9e9e9e;">
          <b-card-text><h6>A: {{ queswer.answer }}</h6></b-card-text>
        </b-card-body>
      </b-collapse>
    </b-card>
</div>

</template>

<script>

export default {
    props: ['queswers'],
}
</script>
