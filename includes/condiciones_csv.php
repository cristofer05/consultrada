<?php
$categories="Condicion de Articulo/";

if ($data['condicion']=='NEW') {
  $categories=$categories.'New';
  $short_description="New Condition";
}
elseif ($data['condicion']=='O') {
  $categories=$categories.'New Other (Completo)';
  $short_description="Open Box like new Condition";
  switch ($data['missing']) {
    case 'O B':
      # code...
      $categories=$categories.'New Other (Completo)';
      $short_description="Open Box like new Condition";
      break;
      case 'O B M':
        # code...
        $categories=$categories.'New Other (Completo)';
        $short_description="Open Box like new Condition";
        break;
        case 'O B M BY':
          # code...
          $categories=$categories.'New Other (Completo)';
          $short_description="Open Box like new Condition";
          break;
          case 'O B M BY W':
            # code...
            $categories=$categories.'New Other (Completo)';
            $short_description="Open Box like new Condition";
            break;
            case 'O B M BY W CH':
              # code...
              $categories=$categories.'New Other (Completo)';
              $short_description="Open Box like new Condition";
              break;
              case 'O B M BY W CH RC':
                # code...
                $categories=$categories.'New Other (Completo)';
                $short_description="Open Box like new Condition";
                break;
                case 'O B M BY W CH RC INK':
                  # code...
                  $categories=$categories.'New Other (Completo)';
                  $short_description="Open Box like new Condition";
                  break;
                  case 'O B M BY W CH RC INK missing-otro':
                    # code...
                    $categories=$categories.'New Other (Completo)';
                    $short_description="Open Box like new Condition";
                    break;
                    case 'O M':
                      # code...
                      $categories=$categories.'New Other (Completo)';
                      $short_description="Open Box like new Condition";
                      break;
                      case 'O M BY':
                        # code...
                        $categories=$categories.'New Other (Completo)';
                        $short_description="Open Box like new Condition";
                        break;
                        case 'O M BY W':
                          # code...
                          $categories=$categories.'New Other (Completo)';
                          $short_description="Open Box like new Condition";
                          break;
                          case 'O M BY W CH':
                            # code...
                            $categories=$categories.'New Other (Completo)';
                            $short_description="Open Box like new Condition";
                            break;
                            case 'O M BY W CH RC':
                              # code...
                              $categories=$categories.'New Other (Completo)';
                              $short_description="Open Box like new Condition";
                              break;
                              case 'O M BY W CH RC INK':
                                # code...
                                $categories=$categories.'New Other (Completo)';
                                $short_description="Open Box like new Condition";
                                break;
                                case 'O M BY W CH RC INK missing-otro':
                                  # code...
                                  $categories=$categories.'New Other (Completo)';
                                  $short_description="Open Box like new Condition";
                                  break;
                                  case 'O W':
                                    # code...
                                    $categories=$categories.'New Other (Completo)';
                                    $short_description="Open Box like new Condition";
                                    break;
                                    case 'O W CH':
                                      # code...
                                      $categories=$categories.'New Other (Completo)';
                                      $short_description="Open Box like new Condition";
                                      break;
                                      case 'O W CH RC':
                                        # code...
                                        $categories=$categories.'New Other (Completo)';
                                        $short_description="Open Box like new Condition";
                                        break;
                                        case 'O W CH RC INK':
                                          # code...
                                          $categories=$categories.'New Other (Completo)';
                                          $short_description="Open Box like new Condition";
                                          break;
                                          case 'O W CH RC INK missing-otro':
                                            # code...
                                            $categories=$categories.'New Other (Completo)';
                                            $short_description="Open Box like new Condition";
                                            break;
                                            case 'O BY':
                                              # code...
                                              $categories=$categories.'New Other (Completo)';
                                              $short_description="Open Box like new Condition";
                                              break;
                                              case 'O BY W':
                                                # code...
                                                $categories=$categories.'New Other (Completo)';
                                                $short_description="Open Box like new Condition";
                                                break;
                                                case 'O BY W CH':
                                                  # code...
                                                  $categories=$categories.'New Other (Completo)';
                                                  $short_description="Open Box like new Condition";
                                                  break;
                                                  case 'O BY W CH RC':
                                                    # code...
                                                    $categories=$categories.'New Other (Completo)';
                                                    $short_description="Open Box like new Condition";
                                                    break;
                                                    case 'O BY W CH RC INK':
                                                      # code...
                                                      $categories=$categories.'New Other (Completo)';
                                                      $short_description="Open Box like new Condition";
                                                      break;
                                                      case 'O BY W CH RC INK missing-otro':
                                                        # code...
                                                        $categories=$categories.'New Other (Completo)';
                                                        $short_description="Open Box like new Condition";
                                                        break;
                                                        case 'O W':
                                                          # code...
                                                          $categories=$categories.'New Other (Completo)';
                                                          $short_description="Open Box like new Condition";
                                                          break;
                                                          case 'O W CH':
                                                            # code...
                                                            $categories=$categories.'New Other (Completo)';
                                                            $short_description="Open Box like new Condition";
                                                            break;
                                                            case 'O W CH RC':
                                                              # code...
                                                              $categories=$categories.'New Other (Completo)';
                                                              $short_description="Open Box like new Condition";
                                                              break;
                                                              case 'O W CH RC INK':
                                                                # code...
                                                                $categories=$categories.'New Other (Completo)';
                                                                $short_description="Open Box like new Condition";
                                                                break;
                                                                case 'O W CH RC INK missing-otro':
                                                                  # code...
                                                                  $categories=$categories.'New Other (Completo)';
                                                                  $short_description="Open Box like new Condition";
                                                                  break;
                                                                  case 'O CH':
                                                                    # code...
                                                                    $categories=$categories.'New Other (Completo)';
                                                                    $short_description="Open Box like new Condition";
                                                                    break;
                                                                    case 'O CH RC':
                                                                      # code...
                                                                      $categories=$categories.'New Other (Completo)';
                                                                      $short_description="Open Box like new Condition";
                                                                      break;
                                                                      case 'O CH RC INK':
                                                                        # code...
                                                                        $categories=$categories.'New Other (Completo)';
                                                                        $short_description="Open Box like new Condition";
                                                                        break;
                                                                        case 'O CH RC INK missing-otro':
                                                                          # code...
                                                                          $categories=$categories.'New Other (Completo)';
                                                                          $short_description="Open Box like new Condition";
                                                                          break;
                                                                          case 'O RC':
                                                                            # code...
                                                                            $categories=$categories.'New Other (Completo)';
                                                                            $short_description="Open Box like new Condition";
                                                                            break;
                                                                            case 'O RC INK':
                                                                              # code...
                                                                              $categories=$categories.'New Other (Completo)';
                                                                              $short_description="Open Box like new Condition";
                                                                              break;
                                                                              case 'O RC INK missing-otro':
                                                                                # code...
                                                                                $categories=$categories.'New Other (Completo)';
                                                                                $short_description="Open Box like new Condition";
                                                                                break;
                                                                                case 'O INK':
                                                                                  # code...
                                                                                  $categories=$categories.'New Other (Completo)';
                                                                                  $short_description="Open Box like new Condition";
                                                                                  break;
                                                                                  case 'O INK missing-otro':
                                                                                    # code...
                                                                                    $categories=$categories.'New Other (Completo)';
                                                                                    $short_description="Open Box like new Condition";
                                                                                    break;
                                                                                    case 'O missing-otro':
                                                                                      # code...
                                                                                      $categories=$categories.'New Other (Completo)';
                                                                                      $short_description="Open Box like new Condition";
                                                                                      break;


    default:
      # code...
      break;
  }
}
elseif ($data['condicion']=='GA') {
  $categories=$categories.'Used excellent';
  $short_description="Used item grade A condition - may show minimal signs of used fully tested, original box included";
}
elseif ($data['condicion']=='GB') {
  $short_description="Used item grade B condition - May show light to moderate signs of used including scuff and scratches from normal use, item is fully functional";
}
elseif ($data['condicion']=='GC') {
  $short_description="Used item grade C condition - may show moderate to heavy signs of used may include dings and deep scratches, damaged will not affect functionality";
}
elseif ($data['condicion']=='RE') {
  $short_description="Refurbished Condition";
}





?>
