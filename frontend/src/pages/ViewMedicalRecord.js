import React from 'react';

const ViewMedicalRecord = ({ patientId }) => {
  // Sample medical records data
  const medicalRecords = [
    {
      id: 1,
      visit_date: '2023-05-15',
      doctor: { name: 'Dr. John Doe' },
      diagnosis: 'Hypertension',
      treatment: 'Prescribed medication and diet changes',
      notes: 'Patient advised to monitor blood pressure regularly.',
      created_at: '2023-05-15T10:30:00Z',
      updated_at: '2023-05-15T11:15:00Z'
    },
    {
      id: 2,
      visit_date: '2023-07-20',
      doctor: { name: 'Dr. Jane Smith' },
      diagnosis: 'Influenza',
      treatment: 'Rest, fluids, and over-the-counter medication',
      notes: 'Patient reported improvement after one week.',
      created_at: '2023-07-20T09:45:00Z',
      updated_at: '2023-07-20T10:20:00Z'
    },

  ];

  const formatDate = (isoDate) => {
    const date = new Date(isoDate);
    const options = { year: 'numeric', month: 'long', day: 'numeric' };
    return date.toLocaleDateString('en-US', options);
  };

  return (
    <div>
      <h2>Medical Records</h2>
      {medicalRecords.length === 0 ? (
        <p>No medical records found.</p>
      ) : (
        <table>
          <thead>
            <tr>
              <th>Date of Visit</th>
              <th>Doctor</th>
              <th>Diagnosis</th>
              <th>Treatment</th>
              <th>Notes</th>
              <th>Created At</th>
              <th>Last Updated At</th>
            </tr>
          </thead>
          <tbody>
            {medicalRecords.map(record => (
              <tr key={record.id}>
                <td>{formatDate(record.visit_date)}</td>
                <td>{record.doctor.name}</td>
                <td>{record.diagnosis}</td>
                <td>{record.treatment}</td>
                <td>{record.notes}</td>
                <td>{formatDate(record.created_at)}</td>
                <td>{formatDate(record.updated_at)}</td>
              </tr>
            ))}
          </tbody>
        </table>
      )}
    </div>
  );
};

export default ViewMedicalRecord;
