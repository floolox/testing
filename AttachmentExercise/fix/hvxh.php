<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Id Program</th>
                            <th>Directory</th>
                            <th>teacher</th>
                        </tr>

                    </thead>
                    <tbody>

                        <?php
                        include_once 'DAO/Program.php';
                        include_once 'DAO/ProgramDao.php';

                        $programdao = new ProgramDao();


                        $row = $programdao->showAll()->getIterator();


                        while ($row->valid()) {
                            ?>
                            <tr>
                                <!--current untuk mengambil data array object di index pertama -->
                                <td><?php echo $row->current()->getId_program(); ?> </td>
                                <td><?php echo $row->current()->getDirectory_program(); ?> </td>
                                <td><?php echo $row->current()->getId_teacher()->getUsername(); ?> </td>
                                <td>
                                    <button name="btn_edit" id="submit" class="btn btn-outline btn-warning" onclick="editAdmin(<?php echo $row->current()->getId_program(); ?>)">
                                        edit
                                    </button>

                                    <button name="btn_delete" id="submit" class="btn btn-outline btn-danger" onclick="deleteProgram(<?php echo $row->current()->getId_program(); ?>)">
                                        delete
                                    </button>

                                    <button name="btn_extract" id="<?php echo $row->current()->getId_program(); ?>" value="<?php echo $row->current()->getDirectory_program(); ?>" class="btn btn-outline btn-success" onclick="extractProgram(<?php echo $row->current()->getId_program();?>)">
                                        
                                        extract 
                                    </button>

                                    <button class="btn btn-outline btn-success" data-toggle="modal" data-target="#myModal">
                                        Test
                                    </button>

                                    <button name="btn_view_file" class="btn btn-outline btn-success">
                                        Run Program
                                    </button>


                                     <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                        </div>
                                        <div class="modal-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                </td>
                        
                        </tr>
                        <?php
                        //untuk mengambil data array object selanjutnya
                        $row->next();
                    }
                    ?>

                    
                    
                    </tbody>
                </table>