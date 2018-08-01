<template>
       <center>
                    <h3>Welcome to Mailbox</h3>
                    <div class="col-md-12">
                        <div class="col-md-3">
                                <button type="button" class="btn btn-default btn-sm " data-toggle="modal" data-target="#compose" style="border:0px solid transparent;">
                                    <img src="img/compose.png" width="40%" height="20%">
                                   
                                </button>
                        </div>
                         <div class="col-md-3">
                                <button type="button" class="btn btn-default btn-sm " data-toggle="modal" data-target="#inbox" style="border:0px solid transparent;">
                                    <img src="img/inbox.png" width="40%" height="20%">
                                    <span class="badge badge-warning">{{inbox}}</span>
                                </button>
                        </div>
                        <div class="col-md-3">
                                <button type="button" class="btn btn-default btn-sm " data-toggle="modal" data-target="#outbox" style="border:0px solid transparent;">
                                    <img src="img/outbox.png" width="40%" height="20%">
                                      <span class="badge badge-warning">{{outbox}}</span>
                                </button>

                        </div>
                        <div class="col-md-3">
                                <button type="button" class="btn btn-default btn-sm " data-toggle="modal" data-target="#tracker" style="border:0px solid transparent;">
                                         <img src="img/tracker.png" width="40%" height="20%">
                                </button>
                        </div>
                    </div>
                    </center>

</template>
<script type="text/javascript">
	export default{
		data(){
			return{
                outbox:'',
				inbox:''
			}
			
		},
		 mounted(){
    	   axios.get('counter').then((response)=>{
          this.outbox = response.data;
        }),
          axios.get('count').then((response)=>{
          this.inbox = response.data;
        })
        

    }
	}

</script>