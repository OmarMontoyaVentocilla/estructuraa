<template>
     <div class="container-fluid" >
         <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <div class="row">
                           <div class="col-lg-6 col-md-6 col-xs-6">
                           <p><strong>PACIENTE:</strong> {{lista_datos_antecedentes.nombres_total}}</p>
                          </div>
                          <div class="col-lg-6 col-md-6 col-xs-6">
                           <p><strong>FECHA:</strong> {{lista_datos_antecedentes.fecha}}</p>
                          </div>  
                         </div>
                           <div class="row">
                           <div class="col-lg-6 col-md-6 col-xs-6">
                           <p><strong>EDAD:</strong> {{lista_datos_antecedentes.edad}} años</p>
                          </div>
                          <div class="col-lg-6 col-md-6 col-xs-6">
                           <p><strong>SEXO:</strong> {{printsexo(lista_datos_antecedentes.sexo)}}</p>
                          </div>  
                         </div>
                         <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                <label for="doctor"> <strong>DOCTOR:</strong> </label>
                                <select class="form-control input-sm">
                                    <option value="">Seleccione</option> 
                                    <option v-for="sel in doctor" :value="sel.id">{{sel.name}}</option>
                                </select>
                          </div>   
                          </div><br>
                          <div class="row">
                             <div class="col-lg-12 col-md-12 col-xs-12">
                                 <ul class="nav nav-tabs">
                                   <li class="active"><a data-toggle="tab" href="#home">Personales</a></li>
                                   <li><a data-toggle="tab" href="#menu1">Agentes</a></li>
                                   <li><a data-toggle="tab" href="#menu2">Hábitos</a></li>
                                   <li><a data-toggle="tab" href="#menu3">Familiares</a></li>
                                   <li><a data-toggle="tab" href="#menu4">Patológicos|Enfermedades</a></li>
                                   <li><a data-toggle="tab" href="#menu5">Quirúrgicos</a></li>
                                   <li><a data-toggle="tab" href="#menu6">Reproductivos</a></li>
                                   <li><a data-toggle="tab" href="#menu7">Enfermedad Accidentes</a></li>
                                   
                                </ul>
                             </div> 
                         </div> 
                         <div class="row">
                              <div class="col-lg-12 col-md-12 col-xs-12">
                                <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <div class="row"> 
                                    <div class="col-lg-6 col-md-6 col-xs-6">
                                        <br>
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <td colspan="2"><strong>Lugar de Nacimiento</strong></td>  
                                                </tr>
                                                <tr>
                                                    <td>País:</td>  
                                                    <td>
                                                       <select class="form-control input-sm">
                                                       <option value="">Seleccione</option> 
                                                      </select> 
                                                    </td>   
                                                </tr>
                                                <tr>
                                                    <td>Departamento:</td>  
                                                    <td>
                                                       <select class="form-control input-sm">
                                                       <option value="">Seleccione</option> 
                                                      </select> 
                                                    </td>   
                                                </tr>
                                                 <tr>
                                                    <td>Provincia:</td>  
                                                    <td>
                                                       <select class="form-control input-sm">
                                                       <option value="">Seleccione</option> 
                                                      </select> 
                                                    </td>   
                                                </tr>
                                                 <tr>
                                                    <td>Distrito:</td>  
                                                    <td>
                                                       <select class="form-control input-sm">
                                                       <option value="">Seleccione</option> 
                                                      </select> 
                                                    </td>   
                                                </tr>
                                                <tr>
                                                    <td>Dirección:</td>  
                                                    <td>
                                                       <textarea class="form-control" placeholder="Escriba su respuesta" rows="5" id="comment"></textarea> 
                                                    </td>   
                                                </tr>
                                            </tbody> 
                                        </table>
                                    </div>
                                     <div class="col-lg-6 col-md-6 col-xs-6">
                                        <br>
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <td colspan="2"><strong>Lugar de Procedencia</strong></td>  
                                                </tr>
                                                <tr>
                                                    <td>País:</td>  
                                                    <td>
                                                       <select class="form-control input-sm">
                                                       <option value="">Seleccione</option> 
                                                      </select> 
                                                    </td>   
                                                </tr>
                                                <tr>
                                                    <td>Departamento:</td>  
                                                    <td>
                                                       <select class="form-control input-sm">
                                                       <option value="">Seleccione</option> 
                                                      </select> 
                                                    </td>   
                                                </tr>
                                                 <tr>
                                                    <td>Provincia:</td>  
                                                    <td>
                                                       <select class="form-control input-sm">
                                                       <option value="">Seleccione</option> 
                                                      </select> 
                                                    </td>   
                                                </tr>
                                                 <tr>
                                                    <td>Distrito:</td>  
                                                    <td>
                                                       <select class="form-control input-sm">
                                                       <option value="">Seleccione</option> 
                                                      </select> 
                                                    </td>   
                                                </tr>
                                                <tr>
                                                    <td>N° Departamento/ Interior:</td>  
                                                    <td>
                                                      <input type="text" class="form-control">
                                                    </td>   
                                                </tr>
                                                 <tr>
                                                    <td>Urbanización:</td>  
                                                    <td>
                                                      <input type="text" class="form-control">
                                                    </td>   
                                                </tr>
                                                 <tr>
                                                    <td>Dirección:</td>  
                                                    <td>
                                                      <input type="text" class="form-control">
                                                    </td>   
                                                </tr>
                                            </tbody> 
                                        </table>
                                    </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-lg-6 col-md-6 col-xs-6">
                                           <br>
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <td>Tipo de Operación:</td>  
                                                    <td>
                                                       <select class="form-control input-sm">
                                                       <option value="">Seleccione</option> 
                                                      </select> 
                                                    </td>   
                                                </tr>
                                                 <tr>
                                                    <td>Altitud de Labor:</td>  
                                                    <td>
                                                       <select class="form-control input-sm">
                                                       <option value="">Seleccione</option> 
                                                      </select> 
                                                    </td>   
                                                </tr>
                                                 <tr>
                                                    <td>Trabaja de noche:</td>  
                                                    <td>
                                                       <select class="form-control input-sm">
                                                       <option value="">Seleccione</option> 
                                                      </select> 
                                                    </td>   
                                                </tr>
                                                <tr>
                                                    <td>Estado civil:</td>  
                                                    <td>
                                                       <select class="form-control input-sm">
                                                       <option value="">Seleccione</option> 
                                                      </select> 
                                                    </td>   
                                                </tr>
                                                <tr>
                                                    <td>Area de Trabajo:</td>  
                                                    <td>
                                                      <input type="text" class="form-control">
                                                    </td>   
                                                </tr>
                                                 <tr>
                                                    <td>Puesto al que Postula:</td>  
                                                    <td>
                                                      <input type="text" class="form-control">
                                                    </td>   
                                                </tr>
                                                <tr>
                                                    <td>Residencia en lugar de trabajo</td>  
                                                    <td>
                                                       <select class="form-control input-sm">
                                                       <option value="">Seleccione</option> 
                                                      </select> 
                                                    </td>   
                                                </tr>
                                             </tbody>
                                        </table>   
                                       </div>
                                        <div class="col-lg-6 col-md-6 col-xs-6">
                                                 <br>
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <td>Grado de Intrucción:</td>  
                                                    <td>
                                                       <select class="form-control input-sm">
                                                       <option value="">Seleccione</option> 
                                                      </select> 
                                                    </td>   
                                                </tr>
                                                 <tr>
                                                    <td>Teléfono</td>  
                                                    <td>
                                                       <input type="text" class="form-control">
                                                    </td>   
                                                </tr>
                                                <tr>
                                                    <td>Contacto Referencia</td>  
                                                    <td>
                                                       <input type="text" class="form-control">
                                                    </td>   
                                                </tr>
                                                <tr>
                                                    <td>Parentesco</td>  
                                                    <td>
                                                       <input type="text" class="form-control">
                                                    </td>   
                                                </tr>
                                                 <tr>
                                                    <td>Teléfono de emergencia</td>  
                                                    <td>
                                                       <input type="text" class="form-control">
                                                    </td>   
                                                </tr>
                                                <tr>
                                                    <td>Tiempo de residencia en el lugar de trabajo</td>  
                                                    <td>
                                                       <input type="text" class="form-control"> años
                                                       <input type="text" class="form-control"> meses
                                                    </td>   
                                                </tr>
                                            </tbody>
                                        </table> 
                                        </div>
                                    </div> 
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                     <div class="row"> 
                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                        <br>
                                        <table class="table table-striped">
                                                <tbody>
                                                <tr>
                                                    <td colspan="7">
                                                          <center>      
                                                         <div class="radio">
                                                <label class="checkbox-inline"><input type="checkbox" name="optradio"><strong>VACUNAS COMPLETAS</strong> </label>
                                                         </div>
                                                          </center>

                                                    </td>  
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td><strong>Vacuna</strong></td>
                                                    <td><strong>Dosis</strong></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><strong>Vacuna</strong></td>
                                                    <td><strong>Dosis</strong></td>
                                                </tr>
                                                 <tr>
                                                    <td><label class="checkbox-inline"><input type="checkbox" name="optradio"></label></td>
                                                    <td>Hepatitis B</td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td></td>
                                                    <td><label class="checkbox-inline"><input type="checkbox" name="optradio"></label></td>
                                                    <td>Fiebre Amarilla	</td>
                                                    <td><input type="text" class="form-control"></td>
                                                </tr>
                                                 <tr>
                                                    <td><label class="checkbox-inline"><input type="checkbox" name="optradio"></label></td>
                                                    <td>Tétanos</td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td></td>
                                                    <td><label class="checkbox-inline"><input type="checkbox" name="optradio"></label></td>
                                                    <td>Otras</td>
                                                    <td><input type="text" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td><label class="checkbox-inline"><input type="checkbox" name="optradio"></label></td>
                                                    <td>Influenza</td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td colspan="4"></td>
                                                </tr>
                                                </tbody>
                                        </table>
                                    </div>
                                    </div>
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                    <div class="row"> 
                                    <div class="col-lg-12 col-md-12 col-xs-12" id="habit_noc">
                                        <br>
                                        <table class="table table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td colspan="8" style="font-size:14px;">
                                                            <center>  
                                                            <strong>HÁBITOS NOCIVOS</strong> 
                                                            </center>
                                                       </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tabaco</td>
                                                        <td>
                                                        <select class="form-control input-sm">
                                                            <option value="">Seleccione</option> 
                                                        </select>
                                                       </td>
                                                        <td>Tipo mas frecuente:</td>
                                                        <td>
                                                        <select class="form-control input-sm">
                                                            <option value="">Seleccione</option> 
                                                        </select>
                                                        </td>
                                                        <td>Cantidad:</td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td>Frecuencia</td>
                                                        <td>
                                                            <select class="form-control input-sm">
                                                            <option value="">Seleccione</option> 
                                                            </select>
                                                        </td>
                                                    </tr>
                                                         <tr>
                                                        <td>Alcohol</td>
                                                        <td>
                                                        <select class="form-control input-sm">
                                                            <option value="">Seleccione</option> 
                                                        </select>
                                                       </td>
                                                        <td>Tipo mas frecuente:</td>
                                                        <td>
                                                        <select class="form-control input-sm">
                                                            <option value="">Seleccione</option> 
                                                        </select>
                                                        </td>
                                                        <td>Cantidad:</td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td>Frecuencia</td>
                                                        <td>
                                                            <select class="form-control input-sm">
                                                            <option value="">Seleccione</option> 
                                                            </select>
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                        <td>Drogas</td>
                                                        <td>
                                                        <select class="form-control input-sm">
                                                            <option value="">Seleccione</option> 
                                                        </select>
                                                       </td>
                                                        <td>Tipo de droga que usa:</td>
                                                        <td>
                                                        <select class="form-control input-sm">
                                                            <option value="">Seleccione</option> 
                                                        </select>
                                                        </td>
                                                        <td>Cantidad:</td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td>Frecuencia</td>
                                                        <td>
                                                            <select class="form-control input-sm">
                                                            <option value="">Seleccione</option> 
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Medicamentos</td>
                                                        <td>
                                                        <select class="form-control input-sm">
                                                            <option value="">Seleccione</option> 
                                                        </select>
                                                       </td>
                                                        <td>Tipo de medicamento:</td>
                                                        <td>
                                                        <input type="text" class="form-control">
                                                        </td>
                                                        <td>Cantidad:</td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td>Frecuencia</td>
                                                        <td>
                                                            <select class="form-control input-sm">
                                                            <option value="">Seleccione</option> 
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Actividad Fisica</td>
                                                        <td>
                                                        <select class="form-control input-sm">
                                                            <option value="">Seleccione</option> 
                                                        </select>
                                                       </td>
                                                        <td>Tipo de Act. Fisica:</td>
                                                        <td>
                                                        <input type="text" class="form-control">
                                                        </td>
                                                        <td>Cantidad:</td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td>Frecuencia</td>
                                                        <td><input type="text" class="form-control"></td>
                                                    </tr>

                                                </tbody>
                                        </table>
                                    </div>
                                    </div>
                                </div>
                                <div id="menu3" class="tab-pane fade">
                                         <div class="row"> 
                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                        <br>
                                        <table class="table table-striped">
                                              <tbody>
                                               <tr>
                                                    <td colspan="12">
                                                          <center>      
                                                         <div class="radio">
                                                <label class="checkbox-inline"><input type="checkbox" name="optradio"><strong>ANTECEDENTES FAMILIARES - NIEGA </strong> </label>
                                                         </div>
                                                          </center>
                                                    </td>  
                                                </tr>
                                                  <tr>
                                  <td class="td_auxiliar">PAPÁ</td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">HTA</label></td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">DM</label></td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">CA</label></td>
                                  <td class="td_auxiliar"><input type="text" class="form-control"></td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">ACV</label></td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">Convulsiones</label></td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">Asma Bronquial</label></td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">Enf. Reumatoide	</label></td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">TBC</label></td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">Otro</label></td>
                                  <td class="td_auxiliar"><input type="text" class="form-control"></td>
                                                  </tr> 
                                                   <tr>
                                  <td class="td_auxiliar">MAMÁ</td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">HTA</label></td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">DM</label></td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">CA</label></td>
                                  <td class="td_auxiliar"><input type="text" class="form-control"></td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">ACV</label></td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">Convulsiones</label></td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">Asma Bronquial</label></td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">Enf. Reumatoide	</label></td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">TBC</label></td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">Otro</label></td>
                                  <td class="td_auxiliar"><input type="text" class="form-control"></td>
                                                  </tr> 
                                                   <tr>
                                  <td class="td_auxiliar">HERMANOS</td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">HTA</label></td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">DM</label></td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">CA</label></td>
                                  <td class="td_auxiliar"><input type="text" class="form-control"></td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">ACV</label></td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">Convulsiones</label></td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">Asma Bronquial</label></td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">Enf. Reumatoide	</label></td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">TBC</label></td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">Otro</label></td>
                                  <td class="td_auxiliar"><input type="text" class="form-control"></td>
                                                  </tr>  
                                                  <tr>
                                  <td class="td_auxiliar">ESPOSO(A)	</td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">HTA</label></td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">DM</label></td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">CA</label></td>
                                  <td class="td_auxiliar"><input type="text" class="form-control"></td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">ACV</label></td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">Convulsiones</label></td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">Asma Bronquial</label></td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">Enf. Reumatoide	</label></td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">TBC</label></td>
                                  <td class="td_auxiliar"><label class="checkbox-inline"><input type="checkbox" name="optradio">Otro</label></td>
                                  <td class="td_auxiliar"><input type="text" class="form-control"></td>
                                                  </tr>    
                                              </tbody>  
                                        </table>
                                    </div>
                                         </div>
                                </div>
                                <div id="menu4" class="tab-pane fade">
                                    ÑÑÑÑ
                                </div>
                                <div id="menu5" class="tab-pane fade">
                                    LL
                                </div>
                                <div id="menu6" class="tab-pane fade">
                                    GGGGGG
                                </div>
                                <div id="menu7" class="tab-pane fade">
                                    RR
                                </div>    

                                </div>
                                </div>
                              </div>   
                        </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import swal from 'sweetalert2';
// import imprmir from './Imprimir';
export default{
    created(){
            this.getdatosantecedentes();
    },
     data(){  
          return {
              lista_datos_antecedentes:[]
            
          }
    },
    components: {
    //  imprmir:imprmir
    },
    props:['valor','valor2','doctor'],
    methods:{
            // imprimirder(){
            //    $('#imprimirDerma').modal('show');
            // },
            mensaje(titulo,texto,icono){
             swal({
                 type: icono,
                 title: titulo,
                 text: texto,
                 showConfirmButton: false,
                 timer: 1500
              })
             },
             printsexo(info){
                 if(info==1){
                   return "MASCULINO";
                 }else if(info==2){
                   return "FEMENINO";     
                 }
             },
             getdatosantecedentes(){
                    var urlantecedente='/getantecededat';
                    var valor_orden=this.valor; 
                    axios.get(urlantecedente,{ params: { valor_orden:valor_orden}})
                .then(response=>{
                    this.lista_datos_antecedentes=response.data[0];
                })
                .catch(error=>{
                    console.log(error);
                });
            },
    },
    computed:{
        
    }
}

</script>

<style scoped>
div#habit_noc {
    font-size: 11px;
}

.td_auxiliar{
width: 75px;
font-size: 11px;
}
</style>
