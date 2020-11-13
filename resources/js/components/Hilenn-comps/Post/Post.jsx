import React, { useState, useEffect } from 'react';

import Image from './SelectCategory.jsx';
import Image from './TextContent.jsx';
import Image from './Image.jsx';
import '../../../../scss/PostComponent/postStyle.scss';


export default function Post() {
    return(

    <div className="post-container shadow-lg p-3  bg-white">

              <Image/>
    
              <SelectCategory />
         
              <TextContent/> 
    
    </div>
     );
}