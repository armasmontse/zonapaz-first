<?php

global $contact;

?>
<!-- C o n t r i b u y e -->
<div class="contribuye">
	<div class="contribuye__contenedor">
		<h4 class="contribuye__titulo">Contribuye o dona</h4>
		<div>
			<form id="contactForm" class="formulario">
                <input type="hidden" name="action" value="contact">
				<div class="col6">
					<input class="border" name="name" type="text" required placeholder="Nombre completo">
					<input class="border" name="email" type="email" required placeholder="Email">
                    <div class="phone_code">
                        <select>
                            <option value="93"> +93</option>
                            <option value="355"> +355</option>
                            <option value="49"> +49</option>
                            <option value="966"> +966</option>
                            <option value="54"> +54</option>
                            <option value="61"> +61</option>
                            <option value="43"> +43</option>
                            <option value="32"> +32</option>
                            <option value="501"> +501</option>
                            <option value="591"> +591</option>
                            <option value="55"> +55</option>
                            <option value="1"> +1</option>
                            <option value="56"> +56</option>
                            <option value="86"> +86</option>
                            <option value="57"> +57</option>
                            <option value="82"> +82</option>
                            <option value="506"> +506</option>
                            <option value="385"> +385</option>
                            <option value="53"> +53</option>
                            <option value="45"> +45</option>
                            <option value="593"> +593</option>
                            <option value="503"> +503</option>
                            <option value="44"> +44</option>
                            <option value="34"> +34</option>
                            <option value="63"> +63</option>
                            <option value="358"> +358</option>
                            <option value="44"> +44</option>
                            <option value="30"> +30</option>
                            <option value="502"> +502</option>
                            <option value="31"> +31</option>
                            <option value="504"> +504</option>
                            <option value="852"> +852</option>
                            <option value="44"> +44</option>
                            <option value="353"> +353</option>
                            <option value="354"> +354</option>
                            <option value="972"> +972</option>
                            <option value="39"> +39</option>
                            <option value="81"> +81</option>
                            <option value="52" selected> +52</option>
                            <option value="505"> +505</option>
                            <option value="234"> +234</option>
                            <option value="47"> +47</option>
                            <option value="64"> +64</option>
                            <option value="507"> +507</option>
                            <option value="595"> +595</option>
                            <option value="51"> +51</option>
                            <option value="48"> +48</option>
                            <option value="351"> +351</option>
                        </select>
					<input class="border" name="phone_number" type="number" min="1000000000" max="9999999999" required placeholder="TELÉFONO CON CLAVE INTERNACIONAL">
                </div>
				</div>
				<div class="col6 between">
					<input class="border" name="message" type="text" required placeholder="Mensaje">
					<div class="margBottom">
						<div class="row">
							<input class="checkbox" type="checkbox" id="contribute" name="intention[]" value="Contribuir">
							<label for="contribute" class="checkbox__label">
								Quiero contribuir
							</label>
						</div>
						<div class="row">

							<input class="checkbox" type="checkbox" id="donate" name="intention[]" value="Donar">
							<label for="donate" class="checkbox__label">
								Quiero donar
							</label>
						</div>
					</div>
                    <!-- IMPORTANTE: Agregar selector para cuando el botón está deshabilitado. -->
					<input type="submit" id="sendContactForm" class="boton-base">
				</div>
			</form>
		</div>
		<p class="contribuye__titulo correo">Ponte en contacto: <a href="mailto:<?php echo $contact->social_net['mail']; ?>"><?php echo $contact->social_net['mail']; ?></a></p>
	</div>
</div>
