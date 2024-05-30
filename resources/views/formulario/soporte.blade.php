@include('menu.menu')
<div class="p-4 lg:ml-64  h-full ">
    <div class="flex gap-5 mt-5 max-w-8xl mx-auto sm:px-6 lg:px-8">
        @include('menu.minmenu')
        <div class="p-3 shadow-lg w-full border mb-10 border-gray-200 rounded-lg">
            <h5 class="text-lg font-semibold p-3">Soporte electronico</h5>
            <form class="mt-5 p-3 flex flex-col gap-5" action="{{route('formulario.soporte')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{$procedimiento->id}}" name="id_procedimiento">
                <div class="flex flex-col">
                    <label class="font-semibold">16. Nivel de digitalización</label>
                    <span class="text-sm text-gray-400">Escala de 0 a 5 que permite clasificar cada registro, según disponga o no de soporte electrónico. En esta escala el nivel 4 sólo aplica a procedimientos administrativos de función específica y otras tramitaciones.</span>
                    <div class="grid grid-cols-2 2xl:grid-cols-3 mt-4 gap-5 justify-between">
                        <label for="bordered-radio-0">
                            <div class="flex items-center gap-2 p-3 ps-4 w-[320px] h-[95px]  border border-gray-200 rounded cursor-pointer">
                                <input id="bordered-radio-0" name="nivel_digitalizacion" type="radio" value="Nivel 0" {{ ($soporte->nivel_digitalizacion ?? '') == "Nivel 0" ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 " onclick="toggleFields('Nivel 0')">
                                <div class="flex flex-col">
                                    <span>Nivel 0</span>
                                    <p id="bordered-radio-0" class="text-xs font-normal text-gray-500">No cuenta con soporte electronico para informar y/o para gestionar las etapas asociadas a su tramitación.</p>
                                </div>

                            </div>
                        </label>
                        <label for="bordered-radio-1">
                            <div class="flex items-center gap-2 p-3 ps-4 w-[320px] h-[100px] border border-gray-200 rounded cursor-pointer">
                                <input id="bordered-radio-1" name="nivel_digitalizacion" type="radio" value="Nivel 1" {{ ($soporte->nivel_digitalizacion ?? '') == "Nivel 1" ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 " onclick="toggleFields('Nivel 1')">
                                <div class="flex flex-col">
                                    <span>Nivel 1</span>
                                    <p id="bordered-radio-1" class="text-xs font-normal text-gray-500">Cuenta con soporte electrónico que permite entregar solo información, sin poder gestionar las etapas asociadas a su tramitación.</p>
                                </div>

                            </div>
                        </label>
                        <label for="bordered-radio-2">
                            <div class="flex items-center gap-2 p-3 ps-4 w-[320px] h-[100px] border border-gray-200 rounded cursor-pointer">
                                <input id="bordered-radio-2" name="nivel_digitalizacion" type="radio" value="Nivel 2" {{ ($soporte->nivel_digitalizacion ?? '') == "Nivel 2" ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 " onclick="toggleFields('Nivel 2')">
                                <div class="flex flex-col">
                                    <span>Nivel 2</span>
                                    <p id="bordered-radio-2" class="text-xs font-normal text-gray-500">Cuenta con soporte electrónico que permite descargar formularios, sin poder gestionar las etapas asociadas a su tramitación.</p>
                                </div>
                            </div>
                        </label>

                        <label for="bordered-radio-3">
                            <div class="flex items-center gap-2 p-3 ps-4 w-[320px] h-[100px]  border border-gray-200 rounded cursor-pointer">
                                <input id="bordered-radio-3" name="nivel_digitalizacion" type="radio" value="Nivel 3" {{ ($soporte->nivel_digitalizacion ?? '') == "Nivel 3" ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 " onclick="toggleFields('Nivel 3')">
                                <div class="flex flex-col">
                                    <span>Nivel 3</span>
                                    <p id="bordered-radio-3" class="text-xs font-normal text-gray-500">Cuenta con soporte electronico que permite realizar una o mas etapas de forma digital, manteniendo una de estas etapas en modalidad presencial.</p>
                                </div>
                            </div>
                        </label>
                        @if ($procedimiento->Tipo_procedimiento == 'Procedimiento administrativo de función específica')


                        <label for="bordered-radio-4">
                            <div class="flex items-center gap-2 p-3 ps-4 w-[320px] h-[100px] border border-gray-200 rounded cursor-pointer">
                                <input id="bordered-radio-4" name="nivel_digitalizacion" type="radio" value="Nivel 4" {{ ($soporte->nivel_digitalizacion ?? '') == "Nivel 4" ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 " onclick="toggleFields('Nivel 4')">
                                <div class="flex flex-col">
                                    <span>Nivel 4</span>
                                    <p id="bordered-radio-4" class="text-xs font-normal text-gray-500">Cuenta con soporte electrónico en las etapas que realiza su Usuario, quien no debe realizar ninguna etapa de forma presencial. </p>
                                </div>
                            </div>
                        </label>
                        @else

                        @endif
                        <label for="bordered-radio-5">
                            <div class="flex items-center gap-2 p-3 ps-4 w-[320px] h-[100px] border border-gray-200 rounded cursor-pointer">
                                <input id="bordered-radio-5" name="nivel_digitalizacion" type="radio" value="Nivel 5" {{ ($soporte->nivel_digitalizacion ?? '') == "Nivel 5" ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 " onclick="toggleFields('Nivel 5')">
                                <div class="flex flex-col">
                                    <span>Nivel 5</span>
                                    <p id="bordered-radio-5" class="text-xs font-normal text-gray-500">Cuenta con soporte electronico que permite realizar todas las etapas de forma digital.</p>
                                </div>
                            </div>
                        </label>


                    </div>
                </div>
                <div id="additional-fields" class="flex flex-col mt-3 p-3" style="display: none;">
                    <label class="font-semibold"> Fecha de Digitalización</label>
                    <input type="date" name="fecha_digitalizacion" value="{{ old('fecha_digitalizacion', isset($soporte) ? $soporte->fecha_digitalizacion  : '') }}" class="bg-white border border-gray-300 text-gray-900 text-sm mt-3 rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                </div>
                <div class="flex flex-col mt-3">
                    <label class="font-semibold">17. Canal(es) disponible(s) de atención</label>
                    <span class="text-sm text-gray-400">Medio(s) de contacto disponible para los usuarios(as) durante la tramitación del procedimiento administrativo u otras tramitaciones.</span>
                    <div id="digital" class="flex items-center mb-4 mt-3" style="display: none;">
                        <input id="checked-checkbox-1" type="checkbox" name="canales_atencion[]" value="Canal digital" {{ in_array('Canal digital', $canales_atencion) ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                        <label for="checked-checkbox-1" class="ms-2 text-sm font-medium text-gray-900 ">Canal digital</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input id="checked-checkbox-2" type="checkbox" name="canales_atencion[]" value="Canal presencial" {{ in_array('Canal presencial', $canales_atencion) ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                        <label for="checked-checkbox-2" class="ms-2 text-sm font-medium text-gray-900 ">Canal presencial</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input id="checked-checkbox-3" type="checkbox" name="canales_atencion[]" value="Canal telefónico" {{ in_array('Canal telefónico', $canales_atencion) ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                        <label for="checked-checkbox-3" class="ms-2 text-sm font-medium text-gray-900 ">Canal telefónico</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input id="checked-checkbox-4" type="checkbox" name="canales_atencion[]" value="Modulo de autoatención" {{ in_array('Modulo de autoatención', $canales_atencion) ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                        <label for="checked-checkbox-4" class="ms-2 text-sm font-medium text-gray-900 ">Modulo de autoatención</label>
                    </div>
                </div>
                <div class="flex flex-col mt-3">
                    <label class="font-semibold">18. Canal(es) transaccional(es)</label>
                    <span class="text-sm text-gray-400">Medio a través del cuál se puede realizar la totalidad del procedimiento administrativo u otras tramitaciones, desde su inicio hasta la entrega de la respuesta final. Para estos canales se solicitarán transacciones.</span>
                    <div id="" class="flex items-center mb-4 mt-3" style="display: none;">
                        <input id="checked-checkbox-5" type="checkbox" name="canales_transaccionales[]" value="Canal digital" {{ in_array('Canal digital', $canales_transaccionales) ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                        <label for="checked-checkbox-5" class="ms-2 text-sm font-medium text-gray-900 ">Canal digital</label>
                    </div>
                    <div id="digital3" class="flex items-center mb-4 ">
                        <input id="checked-checkbox-6" type="checkbox" name="canales_transaccionales[]" value="Canal presencial" {{ in_array('Canal presencial', $canales_transaccionales) ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                        <label for="checked-checkbox-6" class="ms-2 text-sm font-medium text-gray-900 ">Canal presencial</label>
                    </div>
                    <div class="flex items-center mb-4 ">
                        <input id="checked-checkbox-7" type="checkbox" name="canales_transaccionales[]" value="Canal telefónico" {{ in_array('Canal telefónico', $canales_transaccionales) ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                        <label for="checked-checkbox-7" class="ms-2 text-sm font-medium text-gray-900 ">Canal telefónico</label>
                    </div>
                    <div class="flex items-center mb-4 ">
                        <input id="checked-checkbox-8" type="checkbox" name="canales_transaccionales[]" value="Modulo de autoatención" {{ in_array('Modulo de autoatención', $canales_transaccionales) ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                        <label for="checked-checkbox-8" class="ms-2 text-sm font-medium text-gray-900 ">Modulo de autoatención</label>
                    </div>
                </div>
                <div class="flex flex-col">

                    <label class="font-semibold">19. Tipo de expediente</label>
                    <span class="text-sm text-gray-400">Indique el estado actual del expediente asociado a este registro. El expediente es el registro íntegro de todas las actuaciones de un procedimiento administrativo, documentos, resoluciones, notificaciones y comunicaciones que deriven de éste.</span>
                    <div class="grid grid-cols-3 mt-4 justify-between gap-3 mb-3">
                        <div id="" class="flex items-center">
                            <input id="default-radio-1" type="radio" name="tipo_expediente" value="Expediente fisico" {{ ($soporte->tipo_expediente ?? '') == "Expediente fisico" ? 'Checked' : '' }} name="tipo_expediente" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                            <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 ">Expediente fisico</label>
                        </div>
                        <div id="tipo-nivel0" style="display: none;" class="flex items-center">
                            <input id="default-radio-2" type="radio" name="tipo_expediente" value="Expediente electrónico" {{ ($soporte->tipo_expediente ?? '') == "Expediente electrónico" ? 'Checked' : '' }} name="tipo_expediente" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                            <label for="default-radio-2" class="ms-2 text-sm font-medium text-gray-900 ">Expediente electrónico</label>
                        </div>
                        <div id="tipo-nivel0-2" style="display: none;" class="flex items-center">
                            <input id="default-radio-3" type="radio" name="tipo_expediente" value="Expediente fisico y electrónico (hibrido)" {{ ($soporte->tipo_expediente ?? '') == "Expediente fisico y electrónico (hibrido)" ? 'Checked' : '' }} name="tipo_expediente" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                            <label for="default-radio-3" class="ms-2 text-sm font-medium text-gray-900 ">Expediente fisico y electrónico (hibrido)</label>
                        </div>
                        <div class="flex items-center">
                            <input id="default-radio-4" type="radio" name="tipo_expediente" value="No genera un expediente" {{ ($soporte->tipo_expediente ?? '') == "No genera un expediente" ? 'Checked' : '' }} name="tipo_expediente" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                            <label for="default-radio-4" class="ms-2 text-sm font-medium text-gray-900 ">No genera un expediente</label>
                        </div>
                    </div>
                </div>
                <div id="nivel-0" style="display: none;">

                    <div class="flex flex-col mt-3 mb-4">
                        <label class="font-semibold">20. Acceso al expediente electronico por parte de los interesados</label>
                        <span class="text-sm text-gray-400">De acuerdo al artículo 18 de la Ley N° 19.880, los(as) interesados(as) tendrán acceso permanente a los expedientes electrónicos, el cuál contendrá un registro de todas las actuaciones del procedimiento. Si dispone de un expediente electrónico, indique si los(as) interesados(as) pueden acceder a éste permanentemente. Si no dispone de expediente electrónico indicar la opción "No".</span>
                        <div class="grid grid-cols-3 mt-4 gap-5 justify-between">
                            <label for="bordered-radio-9">
                                <div class="flex items-center gap-2 p-3 ps-4 w-[320px] h-[95px]  border border-gray-200 rounded cursor-pointer">
                                    <input id="bordered-radio-9" name="acceso_expediente" type="radio" value="Sí, los (as) interesados(as) tienen acceso al expediente electrónico." {{ ($soporte->acceso_expediente ?? '') == "Sí, los (as) interesados(as) tienen acceso al expediente electrónico." ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                                    <div class="flex flex-col">
                                        <p id="bordered-radio-9" class="text-xs font-normal text-gray-500">Sí, los (as) interesados(as) tienen acceso al expediente electrónico.</p>
                                    </div>
                                </div>
                            </label>
                            <label for="bordered-radio-10">
                                <div class="flex items-center gap-2 p-3 ps-4 w-[320px] h-[95px]  border border-gray-200 rounded cursor-pointer">
                                    <input id="bordered-radio-10" name="acceso_expediente" type="radio" value="No, los(as) interesados(as) no tienen acceso al expediente." {{ ($soporte->acceso_expediente ?? '') == "No, los(as) interesados(as) no tienen acceso al expediente." ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                                    <div class="flex flex-col">
                                        <p id="bordered-radio-10" class="text-xs font-normal text-gray-500">No, los(as) interesados(as) no tienen acceso al expediente.</p>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <label class="font-semibold">21. URL del inicio</label>

                        <input type="text" name="url_inicio" value="{{ old('url_inicio', isset($soporte) ? $soporte->url_inicio  : '') }}" placeholder="Formato: https://www.ejemplo.cl" class="bg-white border border-gray-300 text-gray-900 text-sm mt-3 rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                    </div>
                    <div class="flex flex-col">
                        <label class="font-semibold mt-3">22. Ficha ChileAtiende relacionada</label>
                        <span class="text-sm text-gray-400">El portal de ChileAtiende entrega información en lenguaje simple y claro sobre cómo y dónde realizar trámites, y los requisitos a cumplir para ello.</span>
                        <div class="flex mt-4 gap-11">
                            <div class="flex items-center">
                                <input id="default-radio-5" type="radio" value="Si" name="chile_atiende" {{ ($soporte->chile_atiende ?? '') == "Si" ? 'Checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 " onclick="toggleFields2('Si')">
                                <label for="default-radio-5" class="ms-2 text-sm font-medium text-gray-900 ">Si</label>
                            </div>
                            <div class="flex items-center">
                                <input id="default-radio-6" type="radio" value="No" name="chile_atiende" {{ ($soporte->chile_atiende ?? '') == "No" ? 'Checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 " onclick="toggleFields2('No')">
                                <label for="default-radio-6" class="ms-2 text-sm font-medium text-gray-900 ">No</label>
                            </div>
                        </div>
                    </div>
                    <div id="additional-fields-2" class="flex flex-col mt-3 p-3" style="display: none;">
                        <label class="font-semibold">URL de ChileAtiende</label>

                        <input type="url" name="url_ficha" value="{{ old('url_ficha', isset($soporte) ? $soporte->url_ficha  : '') }}" placeholder="Formato: https://www.ejemplo.cl" class="bg-white border border-gray-300 text-gray-900 text-sm mt-3 rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                    </div>
                    <div class="flex flex-col mt-3">
                        <label class="font-semibold">23. Número de plataformas electrónicas que intervienen en el soporte electrónico</label>
                        <span class="text-sm text-gray-400">Indique todas las plataformas electrónicas que apoyan la tramitación del registro, entendiendo como plataforma electrónica el software o conjunto de software, datos e infraestructura tecnológica que sustenta procesos o procedimientos.</span>
                        <input type="number" name="n_plataformas" value="{{ old('n_plataformas', isset($soporte) ? $soporte->n_plataformas  : '') }}" class="bg-white border border-gray-300 text-gray-900 text-sm mt-3 rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                    </div>

                    <div class="flex flex-col mt-3">
                        <label class="font-semibold">24. Alcance de las plataformas electrónicas que soportan el registro</label>
                        <span class="text-sm text-gray-400">Respecto de las plataformas indicadas en la pregunta anterior, señale si ellas cubren todo el procedimiento administrativo o algunas etapas de éste.</span>
                        <div class="grid grid-cols-3 mt-4 gap-5 justify-between">
                            <label for="bordered-radio-7">
                                <div class="flex items-center gap-2 p-3 ps-4 w-[320px] h-[95px]  border border-gray-200 rounded cursor-pointer">
                                    <input id="bordered-radio-7" name="alcance_plataformas" type="radio" value="Las plataformas electrónicas soportan todas las etapas de tramitación del procedimiento administrativo u otra tramitación" {{ ($soporte->alcance_plataformas ?? '') == "Las plataformas electrónicas soportan todas las etapas de tramitación del procedimiento administrativo u otra tramitación" ? 'Checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                                    <div class="flex flex-col">
                                        <p id="bordered-radio-7" class="text-xs font-normal text-gray-500">Las plataformas electrónicas soportan todas las etapas de tramitación del procedimiento administrativo u otra tramitación</p>
                                    </div>
                                </div>
                            </label>
                            <label for="bordered-radio-8">
                                <div class="flex items-center gap-2 p-3 ps-4 w-[320px] h-[95px]  border border-gray-200 rounded cursor-pointer">
                                    <input id="bordered-radio-8" name="alcance_plataformas" type="radio" value="Las plataformas electrónicas soportan parcialmente las etapas de tramitación del procedimiento administrativo u otra tramitación" {{ ($soporte->alcance_plataformas ?? '') == "Las plataformas electrónicas soportan parcialmente las etapas de tramitación del procedimiento administrativo u otra tramitación" ? 'Checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                                    <div class="flex flex-col">
                                        <p id="bordered-radio-8" class="text-xs font-normal text-gray-500">Las plataformas electrónicas soportan parcialmente las etapas de tramitación del procedimiento administrativo u otra tramitación</p>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="flex flex-col mt-3">
                        <label class="font-semibold">25. Plataforma o sistema utilizado para la digitalización</label>
                        <span class="text-sm text-gray-400">Herramienta utilizada para disponer de este registro en soporte electrónico.</span>
                        <div class="flex items-center mb-4 mt-3">
                            <input id="checked-checkbox-9" type="checkbox" name="plataforma_utilizado[]" value="SIMPLE con modalidad Saas (como servicio dispuesto por DGD)" {{ in_array('SIMPLE con modalidad Saas (como servicio dispuesto por DGD)', $plataforma_utilizado) ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                            <label for="checked-checkbox-9" class="ms-2 text-sm font-medium text-gray-900 ">SIMPLE con modalidad Saas (como servicio dispuesto por DGD)</label>
                        </div>
                        <div class="flex items-center mb-4 ">
                            <input id="checked-checkbox-10" type="checkbox" name="plataforma_utilizado[]" value="SIMPLE con modalidad On premise (instalción local o servidores propios)" {{ in_array('SIMPLE con modalidad On premise (instalción local o servidores propios)', $plataforma_utilizado) ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                            <label for="checked-checkbox-10" class="ms-2 text-sm font-medium text-gray-900 ">SIMPLE con modalidad On premise (instalción local o servidores propios)</label>
                        </div>
                        <div class="flex items-center mb-4 ">
                            <input id="checked-checkbox-11" type="checkbox" name="plataforma_utilizado[]" value="Plataformas desarrolladas por la misma institución (equipo propio de la institución)" {{ in_array('Plataformas desarrolladas por la misma institución (equipo propio de la institución)', $plataforma_utilizado) ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                            <label for="checked-checkbox-11" class="ms-2 text-sm font-medium text-gray-900 ">Plataformas desarrolladas por la misma institución (equipo propio de la institución)</label>
                        </div>
                        <div class="flex items-center mb-4 ">
                            <input id="checked-checkbox-12" type="checkbox" name="plataforma_utilizado[]" value="Plataformas desarrolladas por la misma institución (provista externamente)" {{ in_array('Plataformas desarrolladas por la misma institución (provista externamente)', $plataforma_utilizado) ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                            <label for="checked-checkbox-12" class="ms-2 text-sm font-medium text-gray-900 ">Plataformas desarrolladas por la misma institución (provista externamente)</label>
                        </div>
                        <div class="flex items-center mb-4 ">
                            <input id="checked-checkbox-13" type="checkbox" name="plataforma_utilizado[]" value="Plataformas transversales provistas por el Estado" {{ in_array('Plataformas transversales provistas por el Estado', $plataforma_utilizado) ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                            <label for="checked-checkbox-13" class="ms-2 text-sm font-medium text-gray-900 ">Plataformas transversales provistas por el Estado</label>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end">
                    <div class="flex gap-4">

                        <button class="flex items-center gap-2 text-sm p-3 border bg-blue-900 text-white" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-device-floppy">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                                <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M14 4l0 4l-6 0l0 -4" />
                            </svg>Guardar</button>
                        <a href="/digital/{{$procedimiento->id}}" class="flex items-center text-md gap-1 p-3 underline  text-blue-900" name="action" value="guardar">Siguiente <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-right">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                                <path d="M13 18l6 -6" />
                                <path d="M13 6l6 6" />
                            </svg></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@if(session('guardado'))
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
    });
    Toast.fire({
        icon: "success",
        title: "Guardado, Correctamente"
    });
</script>
@endif

<script>
    function toggleFields(value) {
        const additionalFields = document.getElementById('additional-fields');
        const additionalFields2 = document.getElementById('nivel-0');
        const additionalFields3 = document.getElementById('tipo-nivel0');
        const additionalFields4 = document.getElementById('tipo-nivel0-2');

        const additionalFields5 = document.getElementById('digital');
        const additionalFields6 = document.getElementById('digital2');
        const additionalFields7 = document.getElementById('digital3');
        if (value === 'Nivel 5') {
            additionalFields.style.display = 'block';
            additionalFields2.style.display = 'block';
            additionalFields3.style.display = 'block';
            additionalFields4.style.display = 'block';
        } else if (value === 'Nivel 0') {
            additionalFields.style.display = 'none';
            additionalFields2.style.display = 'none';
            additionalFields3.style.display = 'none';
            additionalFields4.style.display = 'none';
            additionalFields5.style.display = 'none';
            additionalFields6.style.display = 'none';


        } else {
            additionalFields.style.display = 'none';
            additionalFields2.style.display = 'block';
            additionalFields3.style.display = 'block';
            additionalFields4.style.display = 'block';
            additionalFields5.style.display = 'block';
            additionalFields6.style.display = 'block';


        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Obtener el valor del radio button seleccionado al cargar la página
        const selectedValue = document.querySelector('input[name="nivel_digitalizacion"]:checked');

        if (selectedValue) {
            toggleFields(selectedValue.value);
        }
    });
</script>



<script>
    function toggleFields2(value) {
        const additionalFields = document.getElementById('additional-fields-2');
        if (value === 'Si') {
            additionalFields.style.display = 'block';
        } else {
            additionalFields.style.display = 'none';
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Obtener el valor del radio button seleccionado al cargar la página
        const selectedValue = document.querySelector('input[name="chile_atiende"]:checked');
        if (selectedValue) {
            toggleFields2(selectedValue.value);
        }
    });
</script>