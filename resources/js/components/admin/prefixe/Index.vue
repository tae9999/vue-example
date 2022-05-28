<template>
<div class="container mt_card">
    <div class="row justify-content-center ">
        <div class="card">
            <div class="card-header text-center">
                <h2>List All Prefixe</h2>
            </div>
            <div class="card-body">
                <div class="row mb-2">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalCreate"><i class="fa fa-plus-circle fa-lg"></i></a>
                </div>
                <div class="row">
                    <Table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Prefixe</th>
                                <th>Status</th>
                                <th>Create By</th>
                                <th>Create date</th>
                                <th>Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(pf,index) in prefixes" :key="pf.id">
                                <td>{{index+1}}</td>
                                <td>{{pf.prefixe_name}}</td>
                                <!-- <td>{{pf.status}}</td> -->
                                <td v-if="pf.status == 'A'"><i class="fa fa-toggle-on fa-lg c_on"></i></td>
                                <td v-else-if="pf.status =='B'"><i class="fa fa-toggle-off fa-lg c_off"></i></td>
                                <td v-else><i class="fa fa-trash-o fa-lg c_dele"></i></td>
                                <td>{{pf.created_by}}</td>
                                <td>{{pf.created_at}}</td>
                                <td v-if="pf.status =='D'">
                                    <a class="btn c_edit" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalEdit" @click="editPrefixe(pf.id)"><i class="fa fa-pencil-square-o fa-lg"></i></a>

                                </td>
                                <td v-else>
                                    <a class="btn c_edit" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalEdit" @click="editPrefixe(pf.id)"><i class="fa fa-pencil-square-o fa-lg"></i></a>
                                    <a class="btn c_dele" href="javascript:void(0)" @click="delePrefixe(pf.id,index)"><i class="fa fa-trash fa-lg"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </Table>
                </div>
            </div>
        </div>

    </div>
    <!-- Modal Create Prefix-->
    <div class="modal fade" id="modalCreate" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Prefixe</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="row justify-content-center mb-2">
                            <label class="col-sm-12 col-md-2 col-xl-2 mb-2">Prefixe : </label>
                            <div class="col-sm-12 col-md-6 col-xl-7 mb-2">
                                <input class="form-control form-control-sm" type="text" placeholder="ระบุคำนำหน้าชื่อ" v-model="create.prefixe_name" required>
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
                                <button class="btn btn-sm btn-success form-control form-control-sm" @click.prevent="createUser()"><i class="fa fa-paper-plane-o"></i> Save</button>
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
                    <h5 class="modal-title">Edit Prefixe</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center mb-2">
                        <label class="col-sm-12 col-md-2 col-xl-2 mb-2">Prefixe : </label>
                        <div class="col-sm-12 col-md-6 col-xl-7 mb-2">
                            <input class="form-control form-control-sm" type="text" placeholder="ระบุคำนำหน้าชื่อ" v-model="edit.prefixe_name" required>
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
                            <button class="btn btn-sm btn-success form-control form-control-sm" @click.prevent="updateUser()"><i class="fa fa-paper-plane-o"></i> Update</button>
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
            prefixes: [],
            create: {
                prefixe_name: '',
                status: ''
            },
            edit: []
        }
    },
    mounted() {
        this.getPrefixes();
    },
    methods: {
        getPrefixes() {

            axios.get('/api/prefixe').then(r => {
                this.prefixes = r.data;
            })

        },
        createUser() {
            // console.log(this.create.prefixe_name+' | '+this.create.status);
            axios.post('/api/prefixe', {
                prefixe_name: this.create.prefixe_name,
                status: this.create.status
            }).then(r => {
                Swal.fire(
                    'Save',
                    'This Save Data Complete *_*',
                    'success',
                ).then((result) => {
                    if (result.isConfirmed) {
                        location.reload();
                    }
                })
            })
        },
        editPrefixe(id) {

            axios.get('/api/prefixe/' + id + '/edit').then(r => {
                this.edit = r.data
                console.log(this.edit);
            })
        },
        updateUser() {
            console.log(this.edit.id + ' | ' + this.edit.prefixe_name + ' | ' + this.edit.status);
            axios.put('/api/prefixe/' + this.edit.id, {
                prefixe_name: this.edit.prefixe_name,
                status: this.edit.status
            }).then(r => {
                Swal.fire(
                    'Update',
                    'This Update Data Complete *_*',
                    'success',
                ).then((result) => {
                    if (result.isConfirmed) {
                        location.reload();
                    }
                })

            })
        },
        delePrefixe(id, index) {
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

                    axios.delete('/api/prefixe/' + id).then(r => {
                        this.prefixes.splice(index, 1)
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
.c_on {
    color: rgb(62, 194, 112);
}

.c_off {
    color: rgb(250, 75, 6);
}

.c_dele {
    color: rgb(245, 3, 3)
}

.c_edit {
    color: rgb(111, 128, 230);
}
</style>
