<template>
  <div class="l-footer">
    <div class="l-wrapper">

      <div class="l-footer--grid">

        <!-- Year and rights -->
        <div>{{(new Date()).getFullYear() }}</div>

        <!-- Logo -->
        <div></div>

        <!-- Social -->
        <div>
          <ul>
            <li>Twitter</li>
            <li>Facebook</li>
            <li>Email</li>
          </ul>
        </div>

      </div>

      <!-- Newletter -->
      <div class="l-footer--row"></div>

      <!-- Made with love -->
      <div class="l-footer--row"></div>

      <!-- Legal -->
      <div class="l-footer--row">
        <span>Aviso de Privacidad</span>
      </div>

    </div>
  </div>
</template>

<script>
export default {
  name: 'TheFooter',
  data () {
    return {
      msg: ''
    }
  }
}
</script>
