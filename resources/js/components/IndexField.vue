<template>
    <p class="whitespace-no-wrap" v-html="wrapText(field)"></p>
</template>

<script>
  export default {
    props: ['resourceName', 'field'],
    methods: {
      wrapText(field){
        let value = field.value;
        let marker = field.wrap.marker;
        let method = field.wrap.method;
        let text = '';
        if (method === 'length'){
          console.log('length');
          text = this.wordwrap(value, marker)
        } else if (method === 'explode'){
          text = this.explodeAndJoin(value, marker)
        } else {
          console.log('wrong method selected');
        }
        console.log('text',text);
        return text;
      },
      explodeAndJoin(str,exploder){
        let exploded = str.split(exploder);
        return exploded.join('<br />');
      },
      wordwrap (text, maxLength) {
        let result = [], line = [];
        let length = 0;
        text.split(" ").forEach(function(word) {
          if ((length + word.length) >= maxLength) {
            result.push(line.join(" "));
            line = []; length = 0;
          }
          length += word.length + 1;
          line.push(word);
        });
        if (line.length > 0) {
          result.push(line.join(" "));
        }
        return result.join('<br/>');
      }
    }
  }
</script>