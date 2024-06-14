import React from 'react';
import { Link } from 'react-router-dom';

const PatientDashboard = () => {
  return (
    <div>
      <h2>Patient Dashboard</h2>
      <ul>
        <li><Link to="/pages/BookAppointment">Book Appointment</Link></li>
        <li><Link to="/pages/VewAppointments">View Appointments</Link></li>
      </ul>
    </div>
  );
};

export default PatientDashboard;
