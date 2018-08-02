<template>
   <div class="modal fade" id="tracker" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Trails</h4>
                      </div>
                      <div class="modal-body">

            <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Mail #</th>
                      <th scope="col">Subject</th>
                      <th scope="col">To</th>
                      <th scope="col">Status</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="item in list">
                      <td>{{item.id}}</td>
                      <td>{{item.subject}}</td>
                      <td>{{item.department.name}}</td>
                      <td>{{item.status}}</td>
                      
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
      mounted(){

        axios.get('outbox').then((response)=>{
          this.list = response.data;
        })
     
      }
    }
  
</script>