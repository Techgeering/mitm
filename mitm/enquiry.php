<div id="myfirstcaptch" class="first-captcha">
	<a href="javascript:void(0)" class="closebtn text-white" onclick="closeNav()">&times;</a>
	<div class="admission-enquiry-bg">
		<h6><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Admission Enquiry For 2024</h6>
	</div>
	<div class="p-5">
		<div class="row" style="margin-top: -28px !important;">
			<label id="error-status" class="text-danger"></label>

			<div class="col-12 ">
				<form id="mitmenquiry" name="form">
					<label for="name" class="form-label">Name:</label>
					<input type="text" class="form-control mb-2" id="enquiryname">

					<!-- <label class="col-12 form-label" for="number">Phone Number:</label>
					<input class="col-12 form-control mb-2" type="text" id="enquiryphone">
					<label for="email" class="form-label">Email:</label>
					<input type="text" id="enquiryemail" class="form-control mb-2"> -->

					<div class="row">
						<div class="col-md-6 mb-2">
							<label class="col-12 form-label" for="number">Phone Number:</label>
							<input class="form-control" type="text" id="enquiryphone">
						</div>
						<div class="col-md-6 mb-2">
							<label for="email" class="form-label">Email:</label>
							<input class="form-control" type="text" id="enquiryemail">
						</div>
					</div>

					<label for="address" class="form-label">Address:</label>
					<textarea id="enquiryaddress" rows="2" class="form-control mb-2"
						style="height: 30px !important;"></textarea>

					<label for="enquirycourse" class="form-label">Course Interested:</label>
					<select class="form-select form-select-lg mb-2" id="enquirycourse">
						<option value="Select Course" class="text-primary">Select Course</option>
						<option value="B.Tech(CSE)" class="text-primary">B.Tech(CSE)</option>
						<option value="B.Tech(ECE)" class="text-primary">B.Tech(ECE)</option>
						<option value="B.Tech(MECH)" class="text-primary">B.Tech(MECH)</option>
						<option value="B.Tech(CIVIL)" class="text-primary">B.Tech(CIVIL)</option>
						<option value="B.Tech(EEE)" class="text-primary">B.Tech(EEE)</option>
						<option value="B.Tech LE(ECE)" class="text-primary">B.Tech LE(ECE)</option>
						<option value="B.Tech LE(CSE)" class="text-primary">B.Tech LE(CSE)</option>
						<option value="B.Tech LE(MECH)" class="text-primary">B.Tech LE(MECH)</option>
					</select>

					<!-- <label for="lastexam" class="form-label">Last Exam Appeared:</label>
					<input type="text" id="lastexam" class="form-control mb-2">
					<label for="lastexampct" class="form-label">Last Exam Percentage:</label>
					<input type="text" id="lastexampct" class="form-control mb-2"> -->
					
					<div class="row">
						<div class="col-md-6 mb-2">
							<label for="lastexam" class="form-label">Last Exam Appeared:</label>
							<input type="text" id="lastexam" class="form-control">
						</div>
						<div class="col-md-6 mb-2">
							<label for="lastexampct" class="form-label">Last Exam Percentage:</label>
							<input type="text" id="lastexampct" class="form-control">
						</div>
					</div>

					<label for="entrance" class="form-label">Entrance Appeared:</label>
					<input type="text" id="entrance" class="form-control mb-2">

					<button type="submit" class="btn px-4 py-3 btn-primary mt-2" name="submit" id="submit"
						style="font-size: 11px !important;">Send
						Enquiry</button>
				</form>

			</div>
		</div>
	</div>
</div>

<div class="Enquiry-btn-position">
	<a href="javascript:void(0)" class="btn enquiry-btn" type="btn" onclick="openNav()"><i class="fa fa-paper-plane"
			aria-hidden="true"></i> Admission Enquiry</a>
</div>
