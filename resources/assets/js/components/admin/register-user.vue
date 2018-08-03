<template>
   <div class="modal fade" id="user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                           <select class="form-control" name="departmentId" required autofocus placeholder="Department">
                              <option value="" id="departmentId"></option>
                           </select>
                      </div>
                       <div class="modal-body">
                        <label for="role" class="col-md-4 control-label">Role</label>
                         <select class="form-control" name="role">
                                 <option  value="secretary">secretary</option>
                                 <option  value="head">head</option>
                          </select>
                      </div>
                      <div class="modal-body">
                         <label for="password" class="col-md-4 control-label">Password</label>
                          <input id="password" type="password" class="form-control" name="password" required>
                      </div> 
                      <div class="modal-body">
                          <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                           <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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
      department:''
    },
    errors:{}
    }
  },
  methods:{
      create(){
        axios.post('/department',this.$data.list).then((response)=>{
        this.list.department= response.data;
        alert("department added")
      }).catch((error)=>{
        this.errors=response.data
        alert()
      })
      }
  }
}

</script>