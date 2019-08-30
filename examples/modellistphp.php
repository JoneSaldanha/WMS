<?php

                                                    $allData = $u -> returnItensRuas();

                                                    foreach ($allData as $data) {
                                                    ?>

                                                       <tr>
                                                         <td> <?= $data['id'] ?> </td>
                                                         <td> <?= $data['id'],$data['lado'],$data['n_rua'],$data['n_armario'],$data['n_andar']?></td>
                                                         <td> <?= $data['nome'] ?> </td>
                                                         <td> <?= $data['n_rua'] ?> </td>
                                                         <td> <?= $data['lado'] ?> </td>
                                                         <td> <?= $data['n_armario'] ?> </td>
                                                         <td> <?= $data['n_andar'] ?> </td>
                                                         <td> <?= $data['quantidade'] ?> </td>
                                                         <td> <?= $data['observacao'] ?> </td>

                                                         <td class='td-actions text-center'>
                                                         
                                                          <button type='button' rel='tooltip' class='btn btn-success' data-toggle='modal' data-target='#entradaModal'>
                                                            <i class='material-icons'>add</i>
                                                           </button>

                                                           <button type='button' rel='tooltip' class='btn btn-warning' data-toggle='modal' data-target='#saidaModal'>
                                                            <i class='material-icons'>remove</i>
                                                           </button>

                                                           <button type='button' rel='tooltip' class='btn btn-info editModalRuas' data-toggle='modal' data-target='#editModal'
                                                                data-whateverid = <?= $data['id'] ?>
                                                                data-whatevercod = <?= $data['id'],$data['lado'],$data['n_rua'],$data['n_armario'],$data['n_andar']?>
                                                                data-whatevernome = <?= $data['nome'] ?> 
                                                                data-whateverrua = <?= $data['n_rua'] ?>
                                                                data-whateverlado = <?= $data['lado'] ?>
                                                                data-whateverarmario = <?= $data['n_armario'] ?>()
                                                                data-whateverandar = <?= $data['n_andar'] ?>
                                                                data-whateverquantidade = <?= $data['quantidade'] ?>
                                                                data-whateverobservacao = <?= $data['observacao'] ?>
                                                                >
                                                                <i class='material-icons'>edit</i>
                                                           </button>

                                                           <button type='button' rel='tooltip' class='btn btn-danger' onClick = "confirmDelIndexRua(<?= $data['id'] ?>)">
                                                                <i class='material-icons'>delete</i>
                                                           </button>
                                                         </td>

                                                       </tr>
                                                       <?php
                                                    }
                                                    
                                                  ?>