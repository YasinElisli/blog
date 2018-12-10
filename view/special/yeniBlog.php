<div class="newPostCon">
	<div class="container ">
		<form action="?url=blog/yeni/elave" method="POST" class="z-depth-5 formNewPost ">
			<blockquote class="headerBlq">Yeni Məqalə</blockquote>
			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">account_circle</i>
					<input name="ad" id="first_name" type="text" class="validate" required>
					<label for="first_name">Adınız *</label>
				</div>
				<div class="input-field col s6">
					<i class="material-icons prefix">group</i>
					<input name="soyad" id="last_name" type="text" class="validate" required>
					<label for="last_name">Soyadınız *</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field  col s6 ">
					<i class="material-icons prefix">subtitles</i>
					<input name="basliq" id="titleBlog" type="text" class="validate" required>
					<label  for="titleBlog">Başlıq *</label>
				</div>
				<div class="input-field  col s6 ">
					<div class="file-field input-field">
						<div class="btn blogPicBtn">
							<span>Məqalə Şəkili</span>
							<input type="file" name="sekil">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">local_offer</i>
					<select name="category" id="category">
						<option value="Diger" selected>Digər</option>
						<option value="Elm və Təhsil">Elm və Təhsil</option>
						<option value="Məişət">Məişət</option>
						<option value="İncəsənət">İncəsənət</option> 
						<option value="Tarix">Tarix</option> 
						<option value="Fəlsəfə">Fəlsəfə</option> 
						<option value="Texnologiya">Texnologiya</option> 
						<option value="Statistika">Statistika</option> 
						<option value="Iqdisadiyyat">Iqdisadiyyat</option>
					</select>
					<label for="category">Kateqoriya</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<i class="material-icons prefix">mode_edit</i>
					<textarea name="meqale" id="textarea1" class="materialize-textarea" required></textarea>
					<label for="textarea1">Blog Mətni *</label><br>	
				</div>

			</div>
			<div class="row">
				<div class="attention col s12 valign-wrapper">
					<p><i class="material-icons">error</i>
					* Olan xanalar doldurulmalıdır</p>
				</div>
			</div>
			<div class="row">
				<div class="col s2 offset-s10">
					<button class="sendBtn btn waves-effect waves-purple hoverable" type="submit" name="action">Göndər
						<i class="material-icons right">send</i>
					</button>
				</div>
			</div>
		</form>
	</div>
</div>