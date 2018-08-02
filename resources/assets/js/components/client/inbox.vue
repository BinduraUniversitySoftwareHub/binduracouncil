<template>
   <div class="modal fade" id="inbox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Inbox</h4>
                      </div>
                      <div class="modal-body">

            <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Mail #</th>
                      <th scope="col">Subject</th>
                      <th scope="col">From</th>
                     
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="item in list">
                      <td>{{item.id}}</td>
                      <td>{{item.subject}}</td>
                      <td>{{item.department.name}}</td>
                     
                      <td><button @click="confirmation(item.id)">Acknowledge</button></td>
                     </tr>
                    
                  </tbody>
            </table>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                   
                      </div>
                    </div>
                  </div>
                </div>

                </div>
     </div>
</template>

<script >
    export default{
      data(){
        return{
             list:{}

           }
        },

      methods:{
        confirmation(id){
          axios.patch('mail/'+id).then((response)=>{
           this.list = response.data;
            alert('confirmed')
          });
        }
      },
      mounted(){

        axios.get('inbox').then((response)=>{
          this.list = response.data;
         
        })
     
      }
    }
  
</script>