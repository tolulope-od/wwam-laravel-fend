import * as React from 'react';

const LandingFooter = () => (
  <div className="w-full pt-2 text-2xl">
    <div className="">
      <img src="/img/colorc148.jpg" alt="Ally" className="w-full" />
    </div>
    <div className="w-full text-gray-50 p-6 bg-wwam-black flex flex-col md:flex-row justify-around">
      <div className="w-1/2 font-light">
        <div className="items-stretch lg:flex">
          <a className="btn btn-ghost btn-sm rounded-btn normal-case font-medium">
            Home
          </a>
          <span className="text-lg">.</span>
          <a className="btn btn-ghost btn-sm normal-case font-medium">
            Portfolio
          </a>
          <span className="text-lg">.</span>
          <a className="btn btn-ghost btn-sm normal-case font-medium">
            About
          </a>
          <span className="text-lg">.</span>
          <a className="btn btn-ghost btn-sm normal-case font-medium">
            Contact
          </a>
          <span className="text-lg">.</span>
        </div>
      </div>
      <div className="md:w-1/3 lg:w-1/6 flex flex-row justify-between">
        <img src="/img/PROFILE VERIFIED.png" alt="Profile Verified" />
        <img src="/img/PROFILE VERIFIED.png" alt="Profile Verified" />
      </div>
    </div>
  </div>
);

export default LandingFooter;
