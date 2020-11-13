import React, { useState, useEffect } from 'react';

import '../../../../scss/PostComponent/postStyle.scss'
import  Image from './Image';

export default function Post() {
    return(

    <div className="post-container shadow-lg p-3  bg-white">

              <Image/>
    
              <SelectCategory />
         
              <TextContent/> 
    
         </div>
     );
}