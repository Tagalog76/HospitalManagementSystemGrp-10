import React from 'react';
import { Link } from 'react-router-dom';

const PatientDashboard = () => {
  return (
    <div>
      <h2>Patient Dashboard</h2>
      <ul>
        <li><Link to="/pages/ViewMedicalRecord">View Medical Record</Link></li>
        <li><Link to="/pages/AppointmentBooking">Book Appointment</Link></li>
        <li><Link to="/pages/ViewAppointment">View Appointment</Link></li>  
      </ul>
    </div>
  );
};

export default PatientDashboard;
