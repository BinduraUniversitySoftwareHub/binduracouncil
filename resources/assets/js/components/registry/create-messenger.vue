<template>
   <div class="modal fade" id="messenger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Create User</h4>
                      </div>
                      <div class="modal-body">
                       <label for="role" class="col-md-4 control-label">Name</label>
                        <input  type="name" class="form-control" v-model="list.name"required autofocus placeholder="Name">
                      </div>
                       <div class="modal-body">
                       <label for="role" class="col-md-4 control-label">Email</label>
                        <input  type="email" class="form-control" v-model="list.email"required autofocus placeholder="Email">
                      </div> 
                      <div class="modal-body">
                            <label for="role" class="col-md-4 control-label">Department</label>
                             <select class="form-control" v-model="list.deptId">
                            <option  v-for="item in departments" :value="item.id">{{item.name}}</option>

                      </select>
                      </div>
                       <div class="modal-body">
                        <label for="role" class="col-md-4 control-label">Role</label>
                         <select class="form-control" v-model="list.role">
                                 <option  value="messenger">messenger</option>
                                
                          </select>
                      </div>
                      <div class="modal-body">
                         <label for="password" class="col-md-4 control-label">Password</label>
                          <input id="password" type="password" class="form-control" v-model="list.password" required>
                      </div> 
                      

                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" @click='create'>Register</button>
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
      deptId:'',
      name:'',
      email:'',
      role:'',
      password:''
    },
    errors:{},
    departments:{},
    }
  },
  methods:{
      create(){
        axios.post('/messenger',this.$data.list).then((response)=>{
        this.list.department= response.data;
        alert("created")
      }).catch((error)=>{
        this.errors=response.data
        alert()
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