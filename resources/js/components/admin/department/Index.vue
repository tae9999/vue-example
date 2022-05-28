<template>
<div class="container mt_card">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header text-center">
                <h2>List All Department</h2>
            </div>
            <div class="card-body">
                <div class="row mb-2">
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalCreate"><i class="fa fa-plus-circle fa-lg"></i></a>
                </div>
                <div class="row">
                    <Table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Departmetn</th>
                                <th>Status</th>
                                <th>Create By</th>
                                <th>Create date</th>
                                <th>Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(depart,index) in department" :key="depart.id">
                                <td>{{index+1}}</td>
                                <td>{{depart.dep_name}}</td>
                                <!-- <td>{{depart.status}}</td> -->
                                <td v-if="depart.status == 'A'"><i class="fa fa-toggle-on fa-lg c_on"></i></td>
                                <td v-else-if="depart.status =='B'"><i class="fa fa-toggle-off fa-lg c_off"></i></td>
                                <td v-else><i class="fa fa-trash-o fa-lg c_dele"></i></td>
                                <td>{{depart.created_by}}</td>
                                <td>{{depart.created_at}}</td>
                                <td v-if="depart.status =='D'">
                                    <a class="btn c_edit" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalEdit" @click="editDep(depart.id)"><i class="fa fa-pencil-square-o fa-lg"></i></a>

                                </td>
                                <td v-else>
                                    <a class="btn c_edit" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalEdit" @click="editDep(depart.id)"><i class="fa fa-pencil-square-o fa-lg"></i></a>
                                    <a class="btn c_dele" href="javascript:void(0)" @click="deleDep(depart.id,index)"><i class="fa fa-trash fa-lg"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </Table>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal Create Departmetn-->
    <div class="modal fade" id="modalCreate" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Departmetn</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="row justify-content-center mb-2">
                            <label class="col-sm-12 col-md-4 col-xl-3 mb-2">Dep Name : </label>
                            <div class="col-sm-12 col-md-6 col-xl-7 mb-2">
                                <input class="form-control form-control-sm" type="text" placeholder="ระบุชื่อบริษัท" v-model="create.dep_name" required>
                            </div>
                        </div>
                        <div class="row justify-content-center mb-2">
                            <div class="col-sm-12 col-md-3 col-xl-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" value="A" v-model="create.status" checked>
                                    <label class="form-check-label">Active</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 col-xl-2 ">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" value="B" v-model="create.status">
                                    <label class="form-check-label">Block</label>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center mb-2">
                            <div class="col-sm-12 col-md-3 col-xl-3 mb-2">
                                <button class="btn btn-sm btn-success form-control form-control-sm" @click.prevent="createDep()"><i class="fa fa-paper-plane-o"></i> Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Edit Prefix-->
    <div class="modal fade" id="modalEdit" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Department</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center mb-2">
                        <label class="col-sm-12 col-md-2 col-xl-3 mb-2">Dep Name : </label>
                        <div class="col-sm-12 col-md-6 col-xl-7 mb-2">
                            <input class="form-control form-control-sm" type="text" placeholder="ระบุคำนำหน้าชื่อ" v-model="edit.dep_name" required>
                        </div>
                    </div>
                    <div v-if="edit.status == 'A'" class="row justify-content-center mb-2">
                        <div class="col-sm-12 col-md-3 col-xl-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" value="A" v-model="edit.status" checked>
                                <label class="form-check-label">Active</label>
                            </div>

                        </div>
                        <div class="col-sm-12 col-md-3 col-xl-2 ">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" value="B" v-model="edit.status">
                                <label class="form-check-label">Block</label>
                            </div>
                        </div>
                    </div>
                    <div v-else class="row justify-content-center mb-2">
                        <div class="col-sm-12 col-md-3 col-xl-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" value="A" v-model="edit.status">
                                <label class="form-check-label">Active</label>
                            </div>

                        </div>
                        <div class="col-sm-12 col-md-3 col-xl-2 ">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" value="B" v-model="edit.status" checked>
                                <label class="form-check-label">Block</label>
                            </div>
                        </div>
                    </div>
                    <!-- <samp>{{edit.status}}</samp> -->
                    <div class="row justify-content-center mb-2">
                        <div class="col-sm-12 col-md-3 col-xl-3 mb-2">
                            <button class="btn btn-sm btn-success form-control form-control-sm" @click.prevent="updateDep()"><i class="fa fa-paper-plane-o"></i> Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            department: [],
            create: {
                dep_name: '',
                status: ''
            },
            edit: {
                id: 0,
                dep_name: '',
                status: ''
            },
        }
    },
    mounted() {
        this.getDep();
    },
    methods: {
        getDep() {
            axios.get('/api/department').then(r => {
                this.department = r.data;
            })
        },
        createDep() {
            console.log(this.create);
            axios.post('/api/department', {
                dep_name: this.create.dep_name,
                status: this.create.status
            }).then(r => {
                Swal.fire(
                    'Save',
                    'This Save Data Complete *_*',
                    'success',
                ).then((result) => {
                    if (result.isConfirmed) {
                        this.getDep();
                    }
                })
            })
        },
        editDep(id) {
            axios.get('/api/department/' + id + '/edit').then(r => {
                this.edit.id = r.data.id;
                this.edit.dep_name = r.data.dep_name;
                this.edit.status = r.data.status;
                // console.log(this.edit);
            });
        },
        updateDep() {
            console.log(this.edit)

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't Update Department!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Update it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    axios.put('/api/department/' + this.edit.id, {
                        dep_name: this.edit.dep_name,
                        status: this.edit.status
                    }).then(r => {})
                    Swal.fire(
                        'Update!',
                        'Your file has been Update.',
                        'success'
                    ).then((result) => {
                        this.getDep();
                    })
                }
            })
        },
        deleDep(id, index) {

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {

                    axios.delete('/api/department/' + id).then(r => {
                        // this.department.splice(index, 1);
                        this.getDep();
                    })
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })
        }

    }
}
</script>
<style>
.mt_card{
    margin-top: 80px;
}
</style>
