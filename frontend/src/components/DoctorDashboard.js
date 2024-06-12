import React from 'react';

const DoctorDashboard = () => {
  return (
    <div>
      <h2>Doctor Dashboard</h2>
      <ul>
        <li><Link to="/doctor/view-appointments">View Appointments</Link></li>
      </ul>
    </div>
  );
};

export default DoctorDashboard;
