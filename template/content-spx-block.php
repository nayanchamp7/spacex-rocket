<?php
/**
 * SpaceX block content for frontend
 *
 * @category Template
 * @package  SPX_Loader
 * @author   Nazrul Islam Nayan <nazrulislamnayan7@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link     https://github.com/nayanchamp7/Nazrul-Islam-Nayan---Frontend-Developer.git
 */
?>
<div class="spx-grid-wrapper">

    <!-- popup content -->
    <div class="spx-grid-popup-wrapper spx-hide">
        <div class="spx-grid-popup-container">
            <button class="spx-pupup-close-btn">
                <span>X</span>
            </button>
            <div class="spx-grid-popup-box">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBESERERERIYERIRGBEREhgYGBERERISGBQaGRgYGBgcIS4lHB4rIRgYJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHRISGjErJSE0MTQ0NDQ0NDQ0NDQ0NDQ0NDQ0MTQ0NDQ0NDQ0NDQ0NDQxNDQ0NDQ0NDQ0NDQ0NDQ0NP/AABEIARQAtwMBIgACEQEDEQH/xAAbAAADAAMBAQAAAAAAAAAAAAAAAQIDBAUGB//EAD0QAAICAAMFBgIIBgAHAQAAAAABAhEDEiEEBTFBUQYiYXGBkROhFCMyQrHB0fAHUnKCouEVMzRDU5KyJP/EABkBAAMBAQEAAAAAAAAAAAAAAAABAgMEBf/EACURAQEAAgICAQMFAQAAAAAAAAABAhEhMQMSQVFhcQQygZHhIv/aAAwDAQACEQMRAD8AhIaQ0iqOlgSQUUkNIAVDSKSHQBKQ6HQ6AFQUVQUATQspdBWkP6Yf/KFsJoKKoKGEUKi2hUTaciaHQ6HRnatNDSHQ0g2CoKKEB6KgGAEwJFJAkUkbMySGkNIaQAkiqGkUkATQ6KSHQBNDoqgoAiVpNpW1wWit9DFss5yw8LPBwqEYq3GWeKupKnon0dPQzyaSbeiWrfRItYbWFszapSwsNrxWor3DnTFQUXQUMmOhUZGiWRkuJodDGZ1URQ6KADTQqLCgCaAqgGGBDSBFJGzEJDSGkUkAJIpIaQJABQ0hpDoAVBRVDoA5O+8fJCEbilN1LNrGlWnzXsepwHDG3bhzSp4Kjldp6NqLXlwfoeR7RQhJYalTrO/JaanrN0YajuxxS0UcOarXjNPj8zPK3caYyetcugouhUaM2NoVGRkMzq4VBQ6HRKyoSiVRSiARQUZKFQBFAXQATVRSEikbMzSKQIaJBpDSBFIogkUkCKSAFQ6AKA3nO0WBKWIq4OCivB5nf5ex6zs9hT/4ZKLj9hQSdJZoRlbd+vDzPO78+1h61o+fieu3JGP/AA6bTVqGXjbazLm3wMcpy0xvDk0JooDS1EjExUZGhURVJoKKoaQgSRVDSChKTQUVQAENAUwANJFohFo1ZKRSJRSAKRSJRSKCkUiUUgAAEMkPGfxBh/0z5/XL07hl7G4NQhP+qPDqr4+iDt1s88T6OoRzV8W+HPJX4Ha3JuyeHhYU1hTw8NxjmcmmniZKk1TdJvgZ5dtMenRAdBQyIQxAANAhiPRoAQJCMgHQgAAbEAaKLRCLRqyUikJDQGpFIlFoCNFISGgMwAADgdpcaEJ4Tnpamk2m61V8F5Hpdi3jDE2HDw4Nz7ycnllFQSjpXm/xZ5DtpCUngKKuliNtyhCKXd4uTRv9l9sXw3g5WpK7dwlB5a4NPxTObyZZzOTGcbm/w6cMfHcLbedOzQNDA6a500DQwJsMgQwSJ0ewkUkCGBghosAJADYAbnotGNFo0ZrRSJRSAKRSJRSALQ0SikANFEDA3ne02y4eJPDzpvLGWXVri/8AXyPVbFuTZ8HYsPEw4ZcS4JvNOWjWujfgjyfaOdY2H0ypcqtyZ76Mb3fHwyP3aM8u4udOOSDEaVAABEmYxDRNOGikSikIwxAAwiQDYAWnORaIRSNELRSJRSA1IpEoaALRSIRSAKQCAA832lw8+JFXX2fwl+p7nc85T3dNT1cVBeVNHh+0GyzxMbDUF3YwUsSVaRTlUfd/gen3PtCivoylmvAlOfRSzxyr8TPLtpOkMQNgVtAAAAAaFYJk04yCsVgIw2KwEIG2AmAw56LRCKRqhaLRjRaAKRSIRSEakUiEUgCkMmxgGns/fe2vlCEGv7MSDb/xkZexWFHE2vGc0m8k4x6qo8vST9zR3fL6veL/AJsCf+WZ/mX/AAuxXLFi3954kfkv0It7XHUnFptPShGzvBViTXRtPzTNWxoA0SNCoMQwFs9CwsLFYqo7CybAQOwJsBhpIaJQ0as2RFIxopMDZENEpjQgtDRCZSAKJxJVGT6Jv5DMW1yrDm/CvfQDjFubD+o22fHuZa5vR6Gn/DZ5cWH9eJX/ALHR3Ykti2ud1a4+GU5vYiSjjYXD7eJw4LvMitNPV78w8uPiacXm9zmHc7SwXxMya1S8/wB/qcNjxvDOwMcWRYWFhMoiHIMwtK2pibJsTYjNsdkWFiCmwJbAWzaiFPEjBZpNRXViRp7xxMSORYeH8SDzKaVXw0Tvlx9ja3UZybdFMpM5e6dtWInBy78OMe9mjHkpXxfjzTT5nSTFLuCzTImUmY0ykxhaY0SmUhBSNXek0sKVuraWvv8AkbSOR2ncfhQUnSc9eeii/wBScrwrGct7dmLB7v2pRktVKvKqOP2WxYQnhNtJZpJ66rV/7MG4YXhbRFcGpZePocSGG44i8JGVz5dEx4fYd/yi3CSp3BJNcHRxGjenklgYMoO45aaVqpvVr5mlI0xrHKMTFY5EtlszsLJsLFTirEKx2IwDYmwJpgAAStNNMaZC/HiPn5ePH09jZk4++9lxMOcdrwF38NfWRX/cw1zrm0r9DqbHtsMWEJwupL0UuavqnyMx5vCxXse1TjBxcJrNk0y4eHTpu/staJeC5LR55bx5i8dXivUplJh8NZITjLNHEjnXFNd5xaafRxa9BIqZSzcTcbLqskS0Y4mSAWiRcUcXtRBuGGv6vy/Q70ImLeewynh6JPK4OrWZrvLRepzefyeuO3T4fH7ZcuN2X2SclKCi+9pw4o0d77tlh4jeVpZ3XHrofQOxu72m3JP1u+DSK7Zbu7kHWrbenmebfL5Lff146/11yYTL021Ny7Pn2OTrWEovp3XHVmrOJ0dxzfwMeGSSyxhUq7trjFy9fxNV4er/AH5Hf+n8lyx3XN5cNZajRkTIz4iT4GvP2Or2c9xIViYrDZaVYWTYrChdjRFjsi1UNsCHIBG1UxpmFY0P5l7opYsf5l7o6GLMmaG9NjjOOdRvEw1cGm03TunXFG0sSPVe6LU11XuhWbmjl05+4t4SxcybdRUdJO5WoxTrgox4uvF9Nemtpg5/DTufGknw19/sy8qPM4Mvo21ySf1c2mumWb/J5l6noN37VLD2nM2pxmsWCfdUo5oTllvjkayvTmjC5XGWRt6zK7roZWnTVNaNcGmZIIwLEX83zM0JrqaWpkdDZsO2ez3Psihhp85Ny5104HjNmxUmtT3e78VSwsNrnFP2qzHvLleXGPDaSoUop8SgNNTWmTmb3wPqu66Seq5PzPI4sKd9K6nst8YqjgzfSl7tfqeNlip5ta9teT/Exs1lw3w5x5aWKuLRrTRkxsTx4fI1viqzZFDZNkymiPiIfSdMlhZjzoFMm5DTLYWRmDMTaqQ2xk5gFs9PNqQ8xrKb6jzs09k6bKkVmNVTZXxPEPYaYd6w0hNL7Lyv+l/7N/CxM0MLFfKWHnrqnUveN+hqzlmi1fH9oW71F5sBulixajeqU0tbfK9H5NGWf1aR081NrpoZoYhixMJrDhiyml8RpLM0m55VKcVfFrXguRig202nGSjWapRdCnkmUP1sdXBx6rU952P23PKUG7yxWXyvX8j5lDGPW9gNp/8A0yXWFelofzKd5lj6VYoyTuuWhr4kn8RLk1qRsc7eJ0Tr5GnO2Prxt5btJvVZsXBvRNP1ypNfJHkZbS7u+HDnrxM/abHa2rFurdPTxRyPiO1Wrei82Y/dvrXDNjYniYZY3Dw/U2tq3djRUVKNSat3SqPK6Xz8KNTD2HEnJxj937Teii+nnoPHy42cUrhfobxG2XGRrzhKMmpcY6cEveuZngy/ZHqzpjzGHMPMTs9MykVmMKYZhbGmRzGYcwAHnLXULRhQ6LSy90acTEkUogGVOJrvEam65ZZwfWl3l7fgjIkY8XRp/wBy846pV1fAm03X23YvpOyNRl/ym9ogtH1WJH/KL9DX3bCKwk492K0a0vM9bfVvX2Rt9mtqjCbw5X8Os0ebyy6JcearxJhs0o54Okvup6ST/l9JKUX43680txyuN67jfUyxln4RnPZfw5inj4kuail8zxEU5cPPoe3/AIcYclOU+TuL6WbzLd4TJ3+K+g4srxMvNJezJ2NV8VLq/wACpP6y61aXyMew4sJfElCSkk8rytSqS0adc7Nvlnev6fJ+09ra8VPjav2RzlC6S4ukvF9DsdtJL6VK3rSbei4vQns/ssZ4kZu6w+94ZtcvtrL+05c8vXG2/DbW8tHvyeTacq7sMOGHBc7aTlKT6vVnn9x7bOCeG4wl3YKM6SUH3nFWlbq3p6WdTfmP3sWfWVaWuVVfTSRzdggrc616cVpaXySMv081juH5e3Z27ZWu8+Lpt9WaiNqWK5RpvhdeXQ1rOiMrrZoaZLkTmHsMmYTZGYdhtJtgIA2p51SX7QZv3qY2xrotX4XZbNkU11+QPESMWb92Un+7A1rEJxZunXHl58huXdT8Wvwevv8AIlu9OorAcNoUZqncoXoqTyyXBeT/ADPRbRHNCGLki5TdSvNFuWr0bWumV34p80eI2jaHGbVVNZWnzWXhqevw944e0YU8uaM8KGBOUHGKg4wjlm01reVxT4JZL1vTDy43UrbxZSbjW2bboRx5wmnmhmyKuLl3mnXRc+XsfQ+wWJdpLRPvHy/4M3jQxYTyzgk3ztU7vwatHuOw29lDaY4CT+seXlo1Fu9OC7rXsRZrLG4/yubuOW3se1+/MPZMGc/iQji5G8OE3JPEuSi8qWraclw4WrpanwzY9742A4ywsScGp4eLPvPLiTg27mvvdNT6Z/GTA2aWBs8pzy7RCUvh60nhypTtcOKj48eOp8lx13kozhO1fdk0r9UvwOq81z7sk09N2n3wttksSEFCOWM56qTzLk1xSVHF3c5T2jDjGcsNXnm1JxShBOT4eCa82chYcs2vFV5nY3I8vxZvmlDXTRPNKn5qJOU1Lo8crcpt2944+edf3tcVmk26fXkZMNVdO6aX+K6mipOUrfF6cEkn0pepuYLu11fkuCM8MdReeW8m1DEp+ZnjBSWnE0JSL2faMsk704s0TKyYkWmTZ0MaeaDObZMos0uy7MSZi2fa4YmfI7yScJaNd5ca6jDaTAhSAQeWltSU8mVrR6tqr6G/sG0ShiQnBJyTpXdLNFxv0zX6GKcMz7yTS4PmvIcHlalHRx1WvMv2qPVimllaTp0608Df3nhqOJk7qcYYN5YuKd4cXdNvXXXXXia2bwjXownjTlcpd56J+ipfgh+00WuQksslfOPppL/XsS4pqr04cxqb8F6aA5N/dS90LapHG2iX1koyapPR9NdOPp7mzHeUsBzcMs3ixlB3mpQlFp1qtdePl0Nv6HhvWUYyb62TLZIf+NPlw8Q/5vA1d7a73u4zjeWpJObWe9eK1etUv2zY2vessHH2basDuyh34t005J6ZlzrvcejF9Fw3VwikjoYG1zw0o4bcYrRZaXXh7smySyxWNurLWHe/bLbNrUoYrgs8I4M2oRzyw1KTUddFbdtpLVR4Ueel8NJUrevN0kvBx4+p2Z7PBylJ4dynbk9ePPmStjw+Pw+HXMy/aIuNrn7DgwliQU9Iu3L7ry1Z2Nr33hTkoQw1GCUIUk4wSiqSSWvi/MxuEapx8/ajHHY8JPSHj94iyZXdVNyaja2PanKWrSXdTauSbk2k15tdDpw+yvG2vc42SMaqGq4UjOttlVU/loGtdFPu6U5cDXji61TdPLXNvTgak9qnXD00Mcdqcdal14XbHOBXdhtGlGNyOStsk9V+APa5LS+HgGj23duWbCxFmcO7LVcVSs4fZGU7xe93El3dftt6NLhwT+Rsbdtr+HNXxjNeVxNLcubCc6+8sP1eW382yp+2ovcerzAcj6bO/wDQE6Uw4bBvT3ABhixJuLVF3pfMAAo1sfGkk6Zl2OblBZnerEAXofKviSzpXoZsWb9uHuACpsU8PO4W2vJ1zMc9okpUnp/sAGGxnd/voUpvK2ACCMbEaqkteIs7riIBhnhFNOyZx8WICTYpacATd1boAKI5Taen70MjmwAVE7GRa+K1JhLwQAMKyq2AAIP/2Q==" alt="">
                <div class="spx-grid-popup-box-content">
                    <h2><?php _e("Capsule Name", "spacex-craft"); ?></h2>
                    <ul>
                        <li><span class="spx-popup-launch-name-label"><?php _e("Launch:", "spacex-craft"); ?></span> <span class="spx-popup-launch-name-value"><?php _e("COTS 2", "spacex-craft"); ?></span></li>
                        <li><span class="spx-popup-status-label"><?php _e("Status:", "spacex-craft"); ?></span> <span class="spx-popup-status-value"><?php _e("retired", "spacex-craft"); ?></span></li>
                        <li><p><?php _e("Launch was scrubbed on first attempt, second launch attempt was successful", "spacex-craft"); ?></p></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- grid content -->
    <div class="spx-grid-container">

        <!-- grid header -->
        <div class="spx-grid-header">
            <?php echo sprintf('<h2>%s</h2>', __("SpaceX Capsule Station", "spacex-craft")); ?>
            <?php echo sprintf('<p>%s</p>', __("An Innovative Power House", "spacex-craft")); ?>
        </div>

        <!-- grid searchbox -->
        <form id="spx-grid-searchbox" class="spx-grid-searchbox" method="post">
            <div class="spx-grid-searchbox-filter-wrap">
                <label for="spx-filter-rocket" class="spx-filter-rocket-label">
                    <select name="spx-filter-rocket" id="spx-filter-rocket">
                        <?php echo sprintf('<option value="status">%s</option>', __("Status", "spacex-craft")); ?>
                        <?php echo sprintf('<option value="serial">%s</option>', __("Serial", "spacex-craft")); ?>
                        <?php echo sprintf('<option value="type">%s</option>', __("Type", "spacex-craft")); ?>
                    </select>
                </label>
                <label for="spx-search-input" class="spx-search-input-label">
                    <input type="text" name="spx-search-input" id="spx-search-input" min="3" placeholder="<?php _e("search a capsule...", "spacex-craft"); ?>">
                </label>
            </div>
            <input type="submit" value="Submit">
        </form>

        <!-- grid items -->
        <div class="spx-grid-items"></div>

        <!-- grid pagination -->
        <div class="spx-grid-pagination-wrapper"></div>
    </div>
</div>