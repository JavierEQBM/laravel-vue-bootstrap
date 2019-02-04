<template>
  <div>
    <div class="card card-default mb-5">
        <div class="card-header">Alerts</div>

        <div class="card-body">
            <b-alert show>Default Alert</b-alert>

            <b-alert variant="success" show>Success Alert</b-alert>

            <b-alert variant="danger"
                     dismissible
                     :show="showDismissibleAlert"
                     @dismissed="showDismissibleAlert=false">
              Dismissible Alert!
            </b-alert>

            <b-alert :show="dismissCountDown"
                     dismissible
                     variant="warning"
                     @dismissed="dismissCountDown=0"
                     @dismiss-count-down="countDownChanged">
              <p>This alert will dismiss after {{dismissCountDown}} seconds...</p>
              <b-progress variant="warning"
                          :max="dismissSecs"
                          :value="dismissCountDown"
                          height="4px">
              </b-progress>
            </b-alert>

            <b-btn @click="showAlert" variant="info" class="m-1">
              Show alert with count-down timer
            </b-btn>
            <b-btn @click="showDismissibleAlert=true" variant="info" class="m-1">
              Show dismissible alert ({{showDismissibleAlert?'visible':'hidden'}})
            </b-btn>
        </div>
    </div>

    <div class="card card-default mb-5">
        <div class="card-header">Additional content inside alerts</div>

        <div class="card-body">
            <b-alert show variant="primary">Primary Alert</b-alert>
            <b-alert show variant="secondary">Secondary Alert</b-alert>
            <b-alert show variant="success">Success Alert</b-alert>
            <b-alert show variant="danger">Danger Alert</b-alert>
            <b-alert show variant="warning">Warning Alert</b-alert>
            <b-alert show variant="info">Info Alert</b-alert>
            <b-alert show variant="light">Light Alert</b-alert>
            <b-alert show variant="dark">Dark Alert</b-alert>
        </div>
    </div>

    <div class="card card-default mb-5">
        <div class="card-header">Card Header</div>

        <div class="card-body">
            <b-alert show variant="success">
              <h4 class="alert-heading">Well done!</h4>
              <p>
                Aww yeah, you successfully read this important alert message.
                This example text is going to run a bit longer so that you can see
                how spacing within an alert works with this kind of content.
              </p>
              <hr>
              <p class="mb-0">
                Whenever you need to, be sure to use margin utilities to keep things nice and tidy.
              </p>
            </b-alert>
        </div>
    </div>

    <div class="card card-default mb-5">
        <div class="card-header">Color of links within alerts</div>

        <div class="card-body">
            <b-alert show variant="primary">
              Primary Alert with <a href="#" class="alert-link">an example link</a>.
            </b-alert>
            <b-alert show variant="secondary">
              Secondary Alert with <a href="#" class="alert-link">an example link</a>.
            </b-alert>
            <b-alert show variant="success">
              Success Alert with <a href="#" class="alert-link">an example link</a>.
            </b-alert>
            <b-alert show variant="danger">
              Danger Alert with <a href="#" class="alert-link">an example link</a>.
            </b-alert>
            <b-alert show variant="warning">
              Warning Alert with <a href="#" class="alert-link">an example link</a>.
            </b-alert>
            <b-alert show variant="info">
              Info Alert with <a href="#" class="alert-link">an example link</a>.
            </b-alert>
            <b-alert show variant="light">
              Light Alert with <a href="#" class="alert-link">an example link</a>.
            </b-alert>
            <b-alert show variant="dark">
              Dark Alert with <b-link href="#" class="alert-link">an example link</b-link>.
            </b-alert>
        </div>
    </div>

    <div class="card card-default mb-5">
        <div class="card-header">Dismissible alerts</div>

        <div class="card-body">
            <b-alert show dismissible>
              Dismissible Alert!  Click the close button over there <b>&rArr;</b>
            </b-alert>
        </div>
    </div>

    <div class="card card-default mb-5">
        <div class="card-header">Auto dismissing alerts</div>

        <div class="card-body">
            <b-alert :show="dismissCountDown"
             dismissible
             variant="warning"
             @dismissed="dismissCountDown=0"
             @dismiss-count-down="countDownChanged">
              This alert will dismiss after {{dismissCountDown}} seconds...
            </b-alert>
            <b-btn @click="showAlert" variant="info" class="m-1">
              Show alert with count-down timer
            </b-btn>
        </div>
    </div>

    <div class="card card-default mb-5">
        <div class="card-header">Fading alerts</div>

        <div class="card-body">
            <b-alert show dismissible fade>
              Dismissible Alert!
            </b-alert>

            <b-alert variant="danger"
                     dismissible
                     fade
                     :show="showDismissibleAlert"
                     @dismissed="showDismissibleAlert=false">
              Dismissible Alert!
            </b-alert>

            <b-alert :show="dismissCountDown"
                     dismissible
                     fade
                     variant="warning"
                     @dismissed="dismissCountDown=0"
                     @dismiss-count-down="countDownChanged">
              This alert will dismiss after {{dismissCountDown}} seconds...
            </b-alert>

            <b-btn @click="showAlert" variant="info" class="m-1">
              Show alert with count-down timer
            </b-btn>
            <b-btn @click="showDismissibleAlert=true" variant="info" class="m-1">
              Show dismissible alert ({{showDismissibleAlert?'visible':'hidden'}})
            </b-btn>
        </div>
    </div>
  </div>
</template>

<script>
export default {
  data () {
    return {
      dismissSecs: 4,
      dismissCountDown: 0,
      showDismissibleAlert: false
    }
  },
  methods: {
    countDownChanged (dismissCountDown) {
      this.dismissCountDown = dismissCountDown
    },
    showAlert () {
      this.dismissCountDown = this.dismissSecs
    }
  }
}
</script>