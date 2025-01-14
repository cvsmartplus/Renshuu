import { Link } from "react-router-dom";
import menu_data from "../../data/menu_data";
import React from "react";

 

const NavMenu = () => {
  return (
    <>
      <ul>
        {menu_data.map((item, i) => (
          <li className="has-dropdown menu-thumb" key={i}>
          <Link to={item.link}>
              <span className="head-icon"><i className={item.icon}></i></span>
              {item.title}
              {item.img_dropdown || item.has_dropdown ? <i className="fas fa-chevron-down"></i> : null}
              
          </Link>
          {item.img_dropdown && 
              <ul className="submenu has-homemenu">
                  <li>
                      <div className="homemenu-items">
                          <div className="row">
                            {item.sub_menus?.map((sub_item, sub_i) => (
                              <div key={sub_i} className="col-lg-3 homemenu">
                              <div className="homemenu-thumb">
                                  <Link to={sub_item.link?? ""}>
                                      <img src={sub_item.demo_img} alt="img" />
                                  </Link>
                              </div>
                              <div className="homemenu-content text-center">
                                  <h4 className="homemenu-title">
                                      <Link to={sub_item.link?? ""}>
                                          {sub_item.title2}
                                      </Link>
                                  </h4>
                              </div>
                          </div>
                            ))} 
                          </div>
                      </div>
                  </li>
              </ul>
          }
          {item.has_dropdown && 
           <ul className="submenu">
            {item.sub_menus?.map((sub_item, sub_index) => (
              <React.Fragment key={sub_index}> 
                {sub_item?.link && (
                  <li><Link to={sub_item.link}>{sub_item.title}</Link></li>
                )}
                {sub_index === 4 &&  item.has_dropdown_inner &&          
                 
                <li className="has-dropdown">
                        <Link to="/news">
                            Blog
                            <i className="fas fa-angle-right"></i>
                        </Link>
                        <ul className="submenu"> 
                            <li><Link to="/news">Blog</Link></li>
                            <li><Link to="/news-details">Blog Details</Link></li>
                        </ul>
                  </li>
 
                }
              </React.Fragment>
            ))} 
       </ul>}
      </li>
        ))} 
      </ul>
    </>
  );
};

export default NavMenu;