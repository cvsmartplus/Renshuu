import { useState } from 'react';

export default function SearchFilterBar({ 
  searchTerm, 
  setSearchTerm, 
  filters = [], 
  setFilter, 
  placeholder 
}) {
  // Mengelola filter yang dipilih dengan state lokal
  const [selectedFilter, setSelectedFilter] = useState(filters[0] || '');

  const handleFilterChange = (e) => {
    const selectedValue = e.target.value;
    setSelectedFilter(selectedValue); // Update local state
    setFilter(selectedValue); // Update parent component state
  };

  return (
    <div className="container my-5">
      <div className="row justify-content-center">
        <div className="col-12 col-md-10">
          <div className="d-flex align-items-center gap-2 bg-white p-3 rounded shadow-sm">
            
            {/* Search Bar */}
            <div className="input-group flex-grow-2">
              <label htmlFor='search' className="input-group-text bg-white">
                <i className="fas fa-search text-muted"></i>
              </label>
              <input
                type="search"
                id="search"
                name="search"
                className="form-control border-start-0"
                placeholder={placeholder}
                value={searchTerm}
                onChange={(e) => {
                    setSearchTerm(e.target.value);
                    console.log("Search Term:", e.target.value); // 🟢 Debugging log
                }}
            />
            </div>

            {/* Dropdown Filter */}
            {filters.length > 0 && (
              <div className="input-group w-50">
                <label htmlFor='filter' className="input-group-text bg-white">
                  <i className="fas fa-filter text-muted"></i>
                </label>
                <select
                  id="filter"
                  name="filter"
                  aria-describedby="filter"
                  className="form-select flex-grow-1"
                  value={selectedFilter} // Pastikan state selectedFilter digunakan sebagai value
                  onChange={handleFilterChange} // Update filter yang dipilih
                >
                  {filters.map((f, index) => (
                    <option key={index} value={f}>{f}</option>
                  ))}
                </select>
              </div>
            )}

            {/* Tombol Grid/List View */}
            <button className="btn btn-light">
              <i className="fas fa-th-large text-muted"></i>
            </button>

          </div>
        </div>
      </div>
    </div>
  );
}
