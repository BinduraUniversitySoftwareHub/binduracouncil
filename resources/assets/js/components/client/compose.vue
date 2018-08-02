<template>
   <div class="modal fade" id="compose" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Compose mail</h4>
                      </div>
                      <div class="modal-body">

                        <input  type="department" class="form-control" v-model="list.subject"required autofocus placeholder="Enter Mail Subject">&nbsp;

                       <select class="form-control" v-model="list.deptId">
                            <option  v-for="item in departments" :value="item.id">{{item.name}}</option>

                      </select>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" @click='compose'>Send  Mail</button>
                      </div>
                    </div>
                  </div>
                </div>

                </div>
     </div>
</template>
<script type="text/javascript">
  export default{
    data(){
        return{
          list:{
            subject:'',
            deptId:''
          },
            

            departments:{},
            errors:{},
        }
      
    },
    methods:{
      compose(){
      
      axios.post('mail',this.$data.list).then((response)=>{
        this.list = response.data;
        alert('added')
      }).catch((error)=>{
        this.errors = response.data;
      })
    }
   

  },
  mounted(){
    axios.get('/department'). then((response)=>{
      this.departments =response.data
    })
  }
}
</script>