import React from 'react';
import { Link } from 'react-router-dom';

const AdminDashboard = () => {
  return (
    <div>
      <h2>Admin Dashboard</h2>
      <ul>
        <li><Link to="/pages/ManagePatients">Manage Patients</Link></li>
        <li><Link to="/pages/ManageDoctors">Manage Doctors</Link></li>
      </ul>
    </div>
  );
};

export default AdminDashboard;
