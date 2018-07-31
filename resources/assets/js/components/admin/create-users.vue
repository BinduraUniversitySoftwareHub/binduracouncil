<template>
   <div class="modal fade" id="dept" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Create Department</h4>
                      </div>
                      <div class="modal-body">

                        <input  type="department" class="form-control" v-model="department"required autofocus placeholder="Department">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" @click='department'>Add Department</button>
                      </div>
                    </div>
                  </div>
                </div>

                </div>
     </div>
</template>