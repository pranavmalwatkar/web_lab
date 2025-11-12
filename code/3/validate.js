document.getElementById('patientForm').addEventListener('submit', function(e) {
  e.preventDefault();

  // Get values
  const patientId = document.getElementById('patientId').value.trim();
  const patientName = document.getElementById('patientName').value.trim();
  const address = document.getElementById('address').value.trim();
  const city = document.getElementById('city').value.trim();
  const contact = document.getElementById('contact').value.trim();
  const dob = document.getElementById('dob').value;

  // Simple validation
  let errorMsg = '';
  if (!patientId || !patientName || !address || !city || !contact || !dob) {
    errorMsg = 'Please fill all fields.';
  }

  document.getElementById('errorMsg').textContent = errorMsg;
  if (errorMsg) return;

  // Display info
  const infoList = document.getElementById('infoList');
  infoList.innerHTML = `
    <li class="list-group-item"><strong>Patient ID:</strong> ${patientId}</li>
    <li class="list-group-item"><strong>Patient Name:</strong> ${patientName}</li>
    <li class="list-group-item"><strong>Address:</strong> ${address}</li>
    <li class="list-group-item"><strong>City:</strong> ${city}</li>
    <li class="list-group-item"><strong>Contact Number:</strong> ${contact}</li>
    <li class="list-group-item"><strong>Date of Birth:</strong> ${dob}</li>
  `;
  document.getElementById('patientInfo').style.display = 'block';
});